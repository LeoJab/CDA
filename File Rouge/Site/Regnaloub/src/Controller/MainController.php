<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;

class MainController extends AbstractController
{
    #[Route('/', name: 'de')]
    public function default(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/accueil', name: 'default')]
    public function index(CategorieRepository $cateRepo): Response
    {
        $categories = $cateRepo->FindAll();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'categories' => $categories,
        ]);
    }
}