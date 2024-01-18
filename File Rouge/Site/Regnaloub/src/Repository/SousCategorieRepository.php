<?php

namespace App\Repository;

use App\Entity\SousCategorie;
use App\Entity\Categorie;
use App\Entity\Produit;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SousCategorie>
 *
 * @method SousCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousCategorie[]    findAll()
 * @method SousCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SousCategorie::class);
    }

    public function findCateProd($produitSlug): ?array
    {
        return $this->createQueryBuilder('sC')
            ->select('c.lib')
            ->innerJoin('App\Entity\Produit', 'p', 'WITH', 'p.SousCategorie = sC.id')
            ->innerJoin('App\Entity\Categorie', 'c', 'WITH', 'c.id = sC.categorie')
            ->where('p.slug LIKE :prodSlug')
            ->setParameter('prodSlug', '%'.$produitSlug.'%')
            ->groupBy('c.lib')
            ->getQuery()
            ->getSingleColumnResult();
    }

//    /**
//     * @return SousCategorie[] Returns an array of SousCategorie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SousCategorie
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
