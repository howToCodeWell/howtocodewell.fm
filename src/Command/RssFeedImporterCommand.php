<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:rss-feed-importer',
    description: 'RSS feed importer',
)]
class RssFeedImporterCommand extends Command
{
    private string $podcastRSSFeedURL;

    public function __construct(string $podcastRSSFeedURL)
    {
        $this->podcastRSSFeedURL = $podcastRSSFeedURL;
        parent::__construct('app:rss-feed-importer');
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->info('Getting feed from '.$this->podcastRSSFeedURL);

        $io->success('Feed has been imported');

        return Command::SUCCESS;
    }
}
