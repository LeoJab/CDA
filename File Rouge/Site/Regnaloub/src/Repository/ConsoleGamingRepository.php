<?php

namespace App\Repository;

use App\Entity\ConsoleGaming;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConsoleGaming>
 *
 * @method ConsoleGaming|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsoleGaming|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsoleGaming[]    findAll()
 * @method ConsoleGaming[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsoleGamingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsoleGaming::class);
    }

    public function findCgDetail($produitSlug): array
    {
        return $this->createQueryBuilder('cg')
            ->innerJoin('App\Entity\Produit', 'p', 'WITH', 'p.consoleGaming = cg.id')
            ->where('p.slug = :slug')
            ->setParameter(':slug', $produitSlug)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return ConsoleGaming[] Returns an array of ConsoleGaming objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ConsoleGaming
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
