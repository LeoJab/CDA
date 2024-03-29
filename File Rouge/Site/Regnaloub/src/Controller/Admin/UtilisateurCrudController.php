<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class UtilisateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilisateur::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('nom'),
            TextField::new('prenom'),
            EmailField::new('email'),
            TextField::new('cate', 'Catégorie'),
            TextField::new('adresse'),
            TextField::new('adresse_liv', 'Adresse de livraison'),
            TextField::new('adresse_fac', 'Adresse de facturation'),
            TextField::new('ville'),
            TextField::new('cp', 'Code postal'),
            TextField::new('tel', 'Téléphone'),
            ArrayField::new('roles'),
        ];
    }

}
