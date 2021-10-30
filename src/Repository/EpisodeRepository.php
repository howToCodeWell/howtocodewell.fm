<?php

namespace App\Repository;

use App\Entity\Episode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface as Pager;
/**
 * @method Episode|null find($id, $lockMode = null, $lockVersion = null)
 * @method Episode|null findOneBy(array $criteria, array $orderBy = null)
 * @method Episode[]    findAll()
 * @method Episode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpisodeRepository extends ServiceEntityRepository
{
    private PaginatorInterface $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
        parent::__construct($registry, Episode::class);
    }

    public function paginateAllOrderedByShowNumber(int $page = 1, int $maxResults = 10): Pager
    {
        $query = $this->createQueryBuilder('e')
            ->andWhere('e.showNumber IS NOT NULL')
            ->orderBy('e.showNumber', 'DESC')
            ->setMaxResults($maxResults)
            ->setFirstResult($maxResults * ($page - 1))
            ->getQuery();

        return $this->paginator->paginate($query, $page);

    }

    public function findAllOrderedByShowNumber():array
    {
        return $this->findBy([

        ], [
            'showNumber' => 'DESC'
        ]);

    }

    public function findLatest(): ?Episode
    {
        return $this->findOneBy([

        ], [
            'showNumber' => 'DESC'
        ]);
    }
}
