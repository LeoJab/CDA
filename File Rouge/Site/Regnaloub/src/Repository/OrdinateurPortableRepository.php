<?php

namespace App\Repository;

use App\Entity\OrdinateurPortable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdinateurPortable>
 *
 * @method OrdinateurPortable|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdinateurPortable|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdinateurPortable[]    findAll()
 * @method OrdinateurPortable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdinateurPortableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdinateurPortable::class);
    }

    public function findOpDetail($produitSlug): array
    {
        return $this->createQueryBuilder('op')
            ->innerJoin('App\Entity\Produit', 'p', 'WITH', 'p.OrdinateurPortable = op.id')
            ->where('p.slug = :slug')
            ->setParameter(':slug', $produitSlug)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return OrdinateurPortable[] Returns an array of OrdinateurPortable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OrdinateurPortable
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
