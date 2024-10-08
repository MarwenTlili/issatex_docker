<?php

namespace App\Repository;

use App\Entity\ProductionJournalier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductionJournalier|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionJournalier|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionJournalier[]    findAll()
 * @method ProductionJournalier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionJournalierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductionJournalier::class);
    }

    // /**
    //  * @return ProductionJournalier[] Returns an array of ProductionJournalier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductionJournalier
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
