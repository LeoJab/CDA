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
    public function default(ProduitRepository $prodRepo, CategorieRepository $cateRepo): Response
    {
        $produits = $prodRepo->FindAll();
        $categories = $cateRepo->FindAll();
        
        return $this->render('main/index.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
        ]);
    }

    #[Route('/accueil', name: 'accueil')]
    public function index(ProduitRepository $prodRepo, CategorieRepository $cateRepo): Response
    {
        $produits = $prodRepo->FindAll();
        $categories = $cateRepo->FindAll();
        
        return $this->render('main/index.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
        ]);
    }
}