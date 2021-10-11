<?php

namespace App\Entity;

use App\Repository\EpisodeRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EpisodeRepository::class)
 */
class Episode
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $externalId;

    /**
     * @ORM\Column(type="integer")
     */
    private int $showNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private int $season;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $title = '';

    /**
     * @ORM\Column(type="text")
     */
    private string $content = '';

    /**
     * @ORM\Column(type="text")
     */
    private string $fileURL = '';

    /**
     * @ORM\Column(type="text")
     */
    private string $link = '';

    /**
     * @ORM\Column(type="integer")
     */
    private int $duration = 0;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $publishedDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $createdDate;

    /**
     * @ORM\Column(type="datetime", nullable="true")
     */
    private ?DateTime $updatedDate = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int
     */
    public function getShowNumber(): int
    {
        return $this->showNumber;
    }

    /**
     * @param int $showNumber
     * @return Episode
     */
    public function setShowNumber(int $showNumber): self
    {
        $this->showNumber = $showNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeason(): int
    {
        return $this->season;
    }

    /**
     * @param int $season
     * @return Episode
     */
    public function setSeason(int $season): self
    {
        $this->season = $season;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Episode
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileURL(): string
    {
        return $this->fileURL;
    }

    /**
     * @param string $fileURL
     * @return Episode
     */
    public function setFileURL(string $fileURL): self
    {
        $this->fileURL = $fileURL;

        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Episode
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Episode
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPublishedDate(): DateTime
    {
        return $this->publishedDate;
    }

    /**
     * @param DateTime $publishedDate
     * @return Episode
     */
    public function setPublishedDate(DateTime $publishedDate): self
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedDate(): DateTime
    {
        return $this->createdDate;
    }

    /**
     * @param DateTime $createdDate
     * @return Episode
     */
    public function setCreatedDate(DateTime $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return ?DateTime
     */
    public function getUpdatedDate(): ?DateTime
    {
        return $this->updatedDate;
    }

    /**
     * @param ?DateTime $updatedDate
     * @return Episode
     */
    public function setUpdatedDate(?DateTime $updatedDate = null): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }


}
