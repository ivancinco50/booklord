<?php

namespace App\Repository;

use App\Entity\SecondFaceofData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SecondFaceofData|null find($id, $lockMode = null, $lockVersion = null)
 * @method SecondFaceofData|null findOneBy(array $criteria, array $orderBy = null)
 * @method SecondFaceofData[]    findAll()
 * @method SecondFaceofData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecondFaceofDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SecondFaceofData::class);
    }

    // /**
    //  * @return SecondFaceofData[] Returns an array of SecondFaceofData objects
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
    public function findOneBySomeField($value): ?SecondFaceofData
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
