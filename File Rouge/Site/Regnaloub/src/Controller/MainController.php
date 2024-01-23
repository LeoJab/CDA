<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;

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

    #[Route('/categorie/{categorie}', name: 'categorie_detail')]
    public function souscategorie($categorie, SousCategorieRepository $ScateRepo, CategorieRepository $cateRepo): Response
    {
        $sousCategorie = $ScateRepo->find($categorie);
        $categorie = $cateRepo->find($categorie);

        return $this->render('main/souscategorie.html.twig', [
            'sous_categorie' => $sousCategorie,
            'categorie' => $categorie,
        ]);
    }

    #[Route('/sous_categorie/{sCategorie}', name: 'sCategorie_detail')]
    public function sCateProduit($sCategorie, SousCategorieRepository $sCateRepo, ProduitRepository $prodRepo): Response
    {
        $sousCategorie = $sCateRepo->find($sCategorie);
        $produits = $prodRepo->findProduit($sCategorie);

        return $this->render('main/sCateProduit.html.twig', [
            'sousCategorie' => $sousCategorie,
            'produits' => $produits,
        ]);
    }

    #[Route('/produits', name: 'produit_all')]
    public function ProduitAll(ProduitRepository $prodRepo): Response
    {
        $produits = $prodRepo->findAll();

        return $this->render('main/produits.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);

        return $this->render('main/contact.html.twig', [
            'form' => $form,
        ]);
    }
}