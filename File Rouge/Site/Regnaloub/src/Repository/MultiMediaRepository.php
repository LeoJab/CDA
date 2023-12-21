<?php

namespace App\Repository;

use App\Entity\MultiMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MultiMedia>
 *
 * @method MultiMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method MultiMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method MultiMedia[]    findAll()
 * @method MultiMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MultiMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MultiMedia::class);
    }

//    /**
//     * @return MultiMedia[] Returns an array of MultiMedia objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MultiMedia
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
