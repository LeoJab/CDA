<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\CategorieRepository;

use App\Entity\Produit;
use App\Entity\SousCategorie;

class ProduitDetailController extends AbstractController
{
    #[Route('/produit/detail/{sCate}/{produit}', name: 'produit_detail')]
    public function index(#[MapEntity(id: 'sCateId')] SousCategorie $sCateId, #[MapEntity(id: 'produitId')] Produit $produitId, CategorieRepository $cateRepo): Response
    {
        $cateId = $sCateId->getCategorie()->getLib();

        switch ($cateId) {
            case 'Ordinateur Portable':
                return $this->render('produit_detail/ordinateur_portable.html.twig', [
                    'produit' => $produitId,
                ]);
                break;
        };
    }
}
