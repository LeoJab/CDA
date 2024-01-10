<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;

class MainController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(ProduitRepository $prodRepo, CategorieRepository $cateRepo): Response
    {
        $produits = $prodRepo->findBy(array(), null, 10, null);
        $categories = $cateRepo->findBy(array(), null, 8, null);
        
        return $this->render('main/index.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie', name: 'categorie')]
    public function categorie(CategorieRepository $cateRepo): Response
    {
        $categoriesPopu = $cateRepo->findBy(array(), null, 5, null);
        $categories = $cateRepo->findAll();
        
        return $this->render('main/categorie.html.twig', [
            'categories' => $categories,
            'categoriespopu' => $categoriesPopu,
        ]);
    }

    #[Route('/sous_categorie/{categorie}', name: 'sous_categorie')]
    public function souscategorie(SousCategorie $categorie): Response
    {
        dd($categorie);

        return $this->render('main/souscategorie.html.twig', [
            'categorie' => $categorie,
        ]);
    }
}