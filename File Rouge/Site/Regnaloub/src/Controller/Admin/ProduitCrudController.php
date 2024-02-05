<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;


class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('lib', 'Nom'),
            TextEditorField::new('description'),
            TextField::new('slug'),
            TextField::new('marque'),
            TextField::new('modele', 'Modèle'),
            NumberField::new('hauteur')->hideOnIndex(),
            NumberField::new('largeur')->hideOnIndex(),
            NumberField::new('profondeur')->hideOnIndex(),
            NumberField::new('poid')->hideOnIndex(),
            NumberField::new('sold'),
            TextField::new('couleur'),
            TextField::new('photo'),
            NumberField::new('prix'),
            NumberField::new('prix_ht', 'Prox hors taxe'),
        ];
    }
  
}
