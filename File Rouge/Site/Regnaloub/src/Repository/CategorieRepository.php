<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 *
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    public function categorieNom($cateId)
    {
        return $this->createQueryBuilder('c')
            ->addSelect('c.lib')
            ->andWhere('c.id = :id')
            ->setParameter('id', $cateId)
            ->getQuery()
            ->getResult();
    }

    public function findCateProd($prodId): array
    {
        return $this->createQueryBuilder('c')
            ->innerJoin('App\Entity\SousCategorie', 'sousCategorie', 'WITH', 'sousCategorie.categorie_id = c.id')
            ->innerJoin('App\Entity\Produit', 'produit', 'WITH', 'produit.souscategorie_id = souscategorie.id')
            ->andWhere('produit.id = :id')
            ->setParameter('id', $prodId)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Categorie[] Returns an array of Categorie objects
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

//    public function findOneBySomeField($value): ?Categorie
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
