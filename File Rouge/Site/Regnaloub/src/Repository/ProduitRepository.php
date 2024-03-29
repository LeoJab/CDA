<?php

namespace App\Repository;

use App\Entity\Produit;
use App\Entity\SousCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function findProduit(int $sCategorie)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.SousCategorie = :id')
            ->setParameter('id', $sCategorie)
            ->getQuery()
            ->getResult();
    }

    public function findProdSim(string $sCateLib, string $produitSlug)
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('App\Entity\SousCategorie', 'sC', 'WITH', 'p.SousCategorie = sC.id')
            ->andWhere('p.slug != :slug')
            ->andWhere('sC.lib = :scLib')
            ->setParameters([
                'slug' => $produitSlug,
                'scLib' => $sCateLib,
            ])
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }


//    /**
//     * @return Produit[] Returns an array of Produit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
