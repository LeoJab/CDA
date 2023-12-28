<?php

namespace App\Repository;

use App\Entity\TelephoneTablette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TelephoneTablette>
 *
 * @method TelephoneTablette|null find($id, $lockMode = null, $lockVersion = null)
 * @method TelephoneTablette|null findOneBy(array $criteria, array $orderBy = null)
 * @method TelephoneTablette[]    findAll()
 * @method TelephoneTablette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TelephoneTabletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TelephoneTablette::class);
    }

//    /**
//     * @return TelephoneTablette[] Returns an array of TelephoneTablette objects
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

//    public function findOneBySomeField($value): ?TelephoneTablette
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
