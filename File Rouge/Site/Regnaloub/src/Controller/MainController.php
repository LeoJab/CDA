<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;

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
        $categories = $cateRepo->findAll();
        
        return $this->render('main/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}