<?php

namespace App\Repository;

use App\Entity\TicketCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TicketCat>
 *
 * @method TicketCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TicketCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TicketCat[]    findAll()
 * @method TicketCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketCatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TicketCat::class);
    }

    //    /**
    //     * @return TicketCat[] Returns an array of TicketCat objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TicketCat
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
