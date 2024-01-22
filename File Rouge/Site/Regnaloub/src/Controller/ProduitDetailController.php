<?php

namespace App\Controller;

use App\Entity\OrdinateurPortable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;

use App\Repository\OrdinateurPortableRepository;
use App\Repository\ConsoleGamingRepository;
use App\Repository\EnceinteRepository;
use App\Repository\ImprimanteRepository;
use App\Repository\TelephoneTabletteRepository;
use App\Repository\TelevisionRepository;
use App\Repository\UniteCentralRepository;

class ProduitDetailController extends AbstractController
{
    #[Route('/produit/detail/{sCateLib}/{produitSlug}', name: 'produit_detail')]
    public function index($sCateLib, $produitSlug, ProduitRepository $prodRepo, SousCategorieRepository $sCateRepo, 
    OrdinateurPortableRepository $opRepo, ConsoleGamingRepository $cgRepo, EnceinteRepository $encRepo, ImprimanteRepository $impRepo, TelephoneTabletteRepository $telTabRepo,
    TelevisionRepository $telRepo, UniteCentralRepository $ucRepo): Response
    {
        $cateLib = implode($sCateRepo->findCateProd($produitSlug));
        $produit = $prodRepo->findBy(['slug' => $produitSlug]);
        $produitsSim = $prodRepo->findProdSim($sCateLib, $produitSlug);
        // dd($cateLib, $produit, $produitsSim);

        switch ($cateLib) {
            case 'Ordinateur Portable':
                $detailProduit = $opRepo->findOpDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/ordinateur_portable.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Tablette':
            case 'Téléphone Mobile':
                $detailProduit = $telTabRepo->findTelTabDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/telephone_tablette.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Console Gaming':
                $detailProduit = $cgRepo->findCgDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/console_gaming.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Unité Central':
                $detailProduit = $ucRepo->findUcDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/unite_centrale.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Imprimante':
                $detailProduit = $impRepo->findImpDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/imprimante.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Enceinte':
                $detailProduit = $encRepo->findEncDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/enceinte.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            case 'Télévision':
                $detailProduit = $telRepo->findTelDetail($produitSlug);
                // dd($cateLib, $produit, $produitSlug, $detailProduit, $produitsSim);
                $vue = $this->render('produit_detail/television.html.twig', [
                    'produit' => $produit,
                    'detailProduit' => $detailProduit,
                    'produitsSim' => $produitsSim,
                ]);
                break;
            default:
                $vue = $this->redirectToRoute('produit_all');
        }; 
        return $vue;
    }
}
