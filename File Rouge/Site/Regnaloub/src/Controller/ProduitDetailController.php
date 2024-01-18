<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Produit;
use App\Entity\SousCategorie;

use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;

class ProduitDetailController extends AbstractController
{
    #[Route('/produit/detail/{sCateLib}/{produitSlug}', name: 'produit_detail')]
    public function index($sCateLib, $produitSlug, ProduitRepository $prodRepo, SousCategorieRepository $sCateRepo): Response
    {
        $cateLibArray = $sCateRepo->findCateProd($produitSlug);
        $cateLibString = implode($cateLibArray);
        $produit = $prodRepo->findBy(['slug' => $produitSlug]);

        switch ($cateLibString) {
            case 'Ordinateur Portable':
                $vue = $this->render('produit_detail/ordinateur_portable.html.twig', [
                    'produit' => $produit,
                ]);
                break;
            default:
                $vue = $this->redirectToRoute('produit_all');
        }; 
        return $vue;
    }
}
