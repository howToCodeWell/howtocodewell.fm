<?php

namespace App\Repository;

use App\Entity\ScheduledVideo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ScheduledVideo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScheduledVideo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScheduledVideo[]    findAll()
 * @method ScheduledVideo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScheduledVideoRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScheduledVideo::class);
    }

    public function findAllOrderedByScheduledDate(): array
    {
        return $this->findBy(
            [

            ],
            [
                'scheduledDate' => 'DESC',
            ]
        );

    }

}
