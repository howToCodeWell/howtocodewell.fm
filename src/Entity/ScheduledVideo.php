<?php

namespace App\Entity;

use App\Repository\ScheduledVideoRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ScheduledVideo
 * @ORM\Entity(repositoryClass=ScheduledVideoRepository::class)
 */
class ScheduledVideo
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
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $thumbnail;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $scheduledDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $createdDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return self
     */
    public function setExternalId(string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getScheduledDate(): DateTime
    {
        return $this->scheduledDate;
    }

    /**
     * @param DateTime $scheduledDate
     * @return self
     */
    public function setScheduledDate(DateTime $scheduledDate): self
    {
        $this->scheduledDate = $scheduledDate;

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
     * @return self
     */
    public function setCreatedDate(DateTime $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return self
     */
    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }


}
