<?php declare(strict_types=1);

namespace App\Tests;

use App\Entity\Episode;
use PHPUnit\Framework\TestCase;

class EpisodeTest extends TestCase
{
    public function testId(): void
    {
        $episode = new Episode();
        $episode->setId(123);

        $this->assertSame(123, $episode->getId());

    }

    public function testExternalId(): void
    {
        $episode = new Episode();
        $id = uniqid('', true);
        $episode->setExternalId($id);

        $this->assertSame($id, $episode->getExternalId());

    }

    public function testTitle(): void
    {
        $episode = new Episode();
        $episode->setTitle('New title');

        $this->assertSame('New title', $episode->getTitle());

    }

    public function testShowNumber(): void
    {
        $episode = new Episode();
        $episode->setShowNumber(116);

        $this->assertSame(116, $episode->getShowNumber());

    }

    public function testSeason(): void
    {
        $episode = new Episode();
        $episode->setSeason(4);

        $this->assertSame(4, $episode->getSeason());

    }

    public function testContent(): void
    {
        $episode = new Episode();
        $episode->setContent("<p>Hello world</p>");

        $this->assertSame("<p>Hello world</p>", $episode->getContent());

    }
}