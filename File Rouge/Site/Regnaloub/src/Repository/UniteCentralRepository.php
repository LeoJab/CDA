<?php

namespace App\Repository;

use App\Entity\UniteCentral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UniteCentral>
 *
 * @method UniteCentral|null find($id, $lockMode = null, $lockVersion = null)
 * @method UniteCentral|null findOneBy(array $criteria, array $orderBy = null)
 * @method UniteCentral[]    findAll()
 * @method UniteCentral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UniteCentralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UniteCentral::class);
    }

//    /**
//     * @return UniteCentral[] Returns an array of UniteCentral objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UniteCentral
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
