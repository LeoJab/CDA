<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Repository\CategorieRepository;

use Symfony\Entity\Produit;
use Symfony\Entity\SousCategorie;

class ProduitDetailController extends AbstractController
{
    #[Route('/produit/detail/{sCateId}/{produitId}', name: 'produit_detail')]
    public function index(#[MapEntity(id: 'sCateId')] SousCategorie $sCateId, #[MapEntity(id: 'produitId')] Produit $produitId, CategorieRepository $cateRepo): Response
    {
        $cateId = $cateRepo->find($sCateId);

        switch ($cateId) {
            case 14:
                return $this->render('produit_detail/ordinateur_portable.html.twig', [
                    'produit' => $produitId,
                ]);
                break;
        };
    }
}
