<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Utilisateur;
use App\Entity\Produit;
use App\Entity\ConsoleGaming;
use App\Entity\Television;


class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Regnaloub');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-list', Utilisateur::class);
        yield MenuItem::linkToCrud('Console Gaming', 'fas fa-list', ConsoleGaming::class);
        yield MenuItem::linkToCrud('Télévision', 'fas fa-list', Television::class);
        yield MenuItem::linkToCrud('Produit', 'fas fa-list', Produit::class);
    }
}
