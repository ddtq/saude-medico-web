<?php

namespace App\Repository;

use App\Entity\Secretkeyadmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Secretkeyadmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Secretkeyadmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Secretkeyadmin[]    findAll()
 * @method Secretkeyadmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecretkeyadminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Secretkeyadmin::class);
    }

    // /**
    //  * @return Secretkeyadmin[] Returns an array of Secretkeyadmin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Secretkeyadmin
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
