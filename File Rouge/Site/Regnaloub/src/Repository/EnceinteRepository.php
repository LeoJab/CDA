<?php

namespace App\Repository;

use App\Entity\Enceinte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Enceinte>
 *
 * @method Enceinte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enceinte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enceinte[]    findAll()
 * @method Enceinte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnceinteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enceinte::class);
    }

    public function findEncDetail($produitSlug): array
    {
        return $this->createQueryBuilder('enc')
            ->innerJoin('App\Entity\Produit', 'p', 'WITH', 'p.Enceinte = enc.id')
            ->where('p.slug = :slug')
            ->setParameter(':slug', $produitSlug)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Enceinte[] Returns an array of Enceinte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Enceinte
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
