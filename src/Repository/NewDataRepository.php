<?php

namespace App\Repository;

use App\Entity\NewData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NewData|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewData|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewData[]    findAll()
 * @method NewData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewData::class);
    }

    // /**
    //  * @return NewData[] Returns an array of NewData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewData
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
