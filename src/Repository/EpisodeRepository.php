<?php

namespace App\Repository;

use App\Entity\Episode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

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

    public function findAllOrderedByShowNumber($page = 1, $maxResults = 10)
    {
//        $dql   = "SELECT a FROM AcmeMainBundle:Article a";
//    $query = $em->createQuery($dql);
//
//    $pagination = $paginator->paginate(
//        $query, /* query NOT result */
//        $request->query->getInt('page', 1), /*page number*/
//        10 /*limit per page*/
//    );

    $query = $this->createQueryBuilder('e')
            ->andWhere('e.showNumber IS NOT NULL')
            ->orderBy('e.showNumber', 'DESC')
            ->setMaxResults($maxResults)
            ->setFirstResult($maxResults * ($page-1))
            ->getQuery();

    return $this->paginator->paginate($query, $page);

//        return $this->createQueryBuilder('e')
//            ->andWhere('e.showNumber IS NOT NULL')
//            ->orderBy('e.showNumber', 'DESC')
//            ->setMaxResults($maxResults)
//            ->setFirstResult($maxResults * ($page-1))
//            ->getQuery()
//            ->getResult();
    }
}
