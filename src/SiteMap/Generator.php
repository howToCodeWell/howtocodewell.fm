<?php

namespace App\SiteMap;

use App\Entity\Episode;
use App\Repository\EpisodeRepository;
use DateTime;

class Generator
{
    private const DOMAIN = 'https://howtocodewell.fm';
    private array $URLs = [];
    private array $dataSet = [];
    private array $static = [];

    public function __construct(private EpisodeRepository $repository)
    {
    }

    public function generate(): self
    {

        $this->dataSet = $this->repository->findAllOrderedByShowNumber();
        $this->static = $this->loadStatic();

        $this->addStaticNodes();
        $this->addArchiveNodes();
        $this->addEpisodeNodes();

        return $this;
    }

    protected function addStaticNodes(): void
    {
        foreach ($this->static as $data) {
            $this->URLs[] = $this->addNode($data['loc'], new DateTime(), $data['changefreq']);
        }
    }

    protected function addEpisodeNodes(): void
    {
        foreach ($this->dataSet as $data) {
            $this->URLs[] = $this->addNodeFromEpisode($data);
        }
    }


    protected function addArchiveNodes(): void
    {
        $totalCount = count($this->dataSet);
        $totalArchiveCount = floor($totalCount / 10);

        for ($i = 0; $i < $totalArchiveCount; $i++){
            $pageNum = ($i + 1);
            if($pageNum > $totalArchiveCount){
                break;
            }
            $publishedDate = new DateTime();
            $publishedDate->modify('-1 week');
            $this->URLs[] = $this->addNode('/archive/'.$pageNum, $publishedDate);
        }

    }


    protected function loadStatic(): array
    {
        return [
            [
                'loc' => '/',
                'lastmod' => '2021-10-30',
                'changefreq' => 'weekly',
            ],
            [
                'loc' => '/contact',
                'lastmod' => '2021-10-30',
                'changefreq' => 'monthly',
            ],
            [
                'loc' => '/sponsor',
                'lastmod' => '2021-10-30',
                'changefreq' => 'monthly',
            ],
            [
                'loc' => '/archive',
                'lastmod' => '2021-10-30',
                'changefreq' => 'weekly',
            ],
            [
                'loc' => '/rss',
                'lastmod' => '2021-10-30',
                'changefreq' => 'weekly',
            ]
        ];
    }

    protected function addNodeFromEpisode(Episode $episode): array
    {
        return $this->addNode('/' . $episode->getShowNumber(), $episode->getPublishedDate());
    }

    protected function addNode(string $location, DateTime $lastModDate, string $changeFreq = 'weekly', float $priority = 0.5): array
    {
        return [
            'loc' => self::DOMAIN . $location,
            'lastmod' => $lastModDate->format('Y-m-d'),
            'changefreq' => $changeFreq,
            'priority' => $priority
        ];
    }

    public function getURLs(): array
    {
        return $this->URLs;
    }
}