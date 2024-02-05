<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Utilisateur;
use App\Entity\Produit;
use App\Entity\ConsoleGaming;
use App\Entity\Television;
use App\Entity\Enceinte;
use App\Entity\Imprimante;
use App\Entity\OrdinateurPortable;
use App\Entity\TelephoneTablette;
use App\Entity\UniteCentral;


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

        yield MenuItem::section('Produits');
        yield MenuItem::linkToCrud('Produit', 'fas fa-list', Produit::class);
        yield MenuItem::linkToCrud('Ajouter un produit', 'fas fa-plus', Produit::class)->setAction(Crud::PAGE_NEW);
        yield MenuItem::subMenu('Télévision')->setSubItems([
            MenuItem::linkToCrud('Ajouter une télévision', 'fas fa-plus', Television::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les télévisions', 'fas fa-eye', Television::class)
        ]);
        yield MenuItem::subMenu('Console Gaming')->setSubItems([
            MenuItem::linkToCrud('Ajouter une console/gaming', 'fas fa-plus', ConsoleGaming::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les consoles/gaming', 'fas fa-eye', ConsoleGaming::class)
        ]);
        yield MenuItem::subMenu('Enceinte')->setSubItems([
            MenuItem::linkToCrud('Ajouter une enceinte', 'fas fa-plus', Enceinte::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les enceintes', 'fas fa-eye', Enceinte::class)
        ]);
        yield MenuItem::subMenu('Imprimante')->setSubItems([
            MenuItem::linkToCrud('Ajouter une imprimante', 'fas fa-plus', Imprimante::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les imprimantes', 'fas fa-eye', Imprimante::class)
        ]);
        yield MenuItem::subMenu('Ordinateur Portable')->setSubItems([
            MenuItem::linkToCrud('Ajouter un ordinateur portable', 'fas fa-plus', OrdinateurPortable::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les ordinateurs portables', 'fas fa-eye', OrdinateurPortable::class)
        ]);
        yield MenuItem::subMenu('Telephone Tablette')->setSubItems([
            MenuItem::linkToCrud('Ajouter un telephone/tablette', 'fas fa-plus', TelephoneTablette::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les telephones/tablettes', 'fas fa-eye', TelephoneTablette::class)
        ]);
        yield MenuItem::subMenu('Unité Centrale')->setSubItems([
            MenuItem::linkToCrud('Ajouter une unitée centrale', 'fas fa-plus', UniteCentral::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les unitées centrales', 'fas fa-eye', UniteCentral::class)
        ]);
    }
}
