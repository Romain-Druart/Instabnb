<?php

namespace App\Repository;

use App\Entity\Product1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Product1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product1[]    findAll()
 * @method Product1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Product1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product1::class);
    }

    public function findProducts(): array
    {
        return $this->createQueryBuilder('product1')
            ->orderBy('product1.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Product1[] Returns an array of Product1 objects
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
    public function findOneBySomeField($value): ?Product1
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
