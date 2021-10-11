<?php

namespace App\Command;

use App\Entity\Episode;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use DOMDocument;
use DOMElement;
use DOMNode;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:rss-feed-importer',
    description: 'RSS feed importer',
)]
class RssFeedImporterCommand extends Command
{
    private string $podcastRSSFeedURL;
    private EntityManagerInterface $entityManager;

    public function __construct(string $podcastRSSFeedURL, EntityManagerInterface $entityManager)
    {
        $this->podcastRSSFeedURL = $podcastRSSFeedURL;
        $this->entityManager = $entityManager;
        parent::__construct('app:rss-feed-importer');
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->info('Getting feed from '.$this->podcastRSSFeedURL);

        $feed = new DOMDocument();
        $feed->load($this->podcastRSSFeedURL);

        $channelNodes = $feed->getElementsByTagName('channel')->item(0);
        $posts = [];
        if ($channelNodes instanceof DOMNode) {
            $posts = $channelNodes->getElementsByTagName('item');
        }
        /* @var $post DOMElement */
        foreach ($posts as $post) {
            try {
                $title = $post->getElementsByTagName('title')->item(0)->firstChild->nodeValue;
                $description = $post->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
                $pubDate = $post->getElementsByTagName('pubDate')->item(0)->firstChild->nodeValue;
                $guid = $post->getElementsByTagName('guid')->item(0)->firstChild->nodeValue;
                $fileURL = $post->getElementsByTagName('enclosure')->item(0)->getAttribute('url');
                $showNumber = $post->getElementsByTagNameNS('*', 'episode')->item(0)->nodeValue;
                $season = $post->getElementsByTagNameNS('*', 'season')->item(0)->nodeValue;
                $duration = $post->getElementsByTagNameNS('*', 'duration')->item(0)->nodeValue;
                $link = $post->getElementsByTagName('link')->item(0)->firstChild->nodeValue;
                $dateTime = DateTime::createFromFormat(DATE_RSS, $pubDate);
                if (false === $dateTime instanceof DateTime) {
                    throw new Exception('Cannot create date from string '.$pubDate);
                }

                $io->info(
                    [
                        'Processing '.$guid,
                        'Episode: '.$showNumber,
                        'Season: '.$season,
                        'Duration: '.$duration,
                        'Title: '.$title,
                        'Published Date: '.$dateTime->format('d/m/Y H:m:s'),
                        'File URL: '.$fileURL,
                        'Link: '. $link,
                    ]
                );

                $episode = new Episode();
                $episode->setExternalId($guid);
                $episode->setSeason($season);
                $episode->setShowNumber($showNumber);
                $episode->setTitle($title);
                $episode->setContent($description);
                $episode->setLink($link);
                $episode->setPublishedDate($dateTime);
                $episode->setCreatedDate(new DateTime());
                $episode->setDuration($duration);

                $this->entityManager->persist($episode);
                $this->entityManager->flush();
            } catch (Exception $exception) {
                $io->error($exception->getMessage());
                $io->error('SKIPPING');
            }
        }

        $io->success('Feed has been imported');

        return Command::SUCCESS;
    }
}
