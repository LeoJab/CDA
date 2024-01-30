<?php

namespace App\Controller\Admin;

use App\Entity\ConsoleGaming;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ConsoleGamingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConsoleGaming::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('ref'),
            TextField::new('lib'),
            TextEditorField::new('description'),
            TextField::new('prix'),
            TextField::new('prix_ht'),
            TextField::new('marque'),
            TextField::new('modele'),
            TextField::new('hauteur'),
            TextField::new('largeur'),
            TextField::new('profondeur'),
            TextField::new('poid'),
            TextField::new('sold'),
            TextField::new('couleur'),
            TextField::new('photo'),
            TextField::new('slug'),
            AssociationField::new('Produit'),
            TextField::new('ref'),
        ];
    }
    
}
