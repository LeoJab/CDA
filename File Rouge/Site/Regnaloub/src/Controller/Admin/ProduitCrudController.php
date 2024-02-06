<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('ref', 'Référence du produit'),
            TextField::new('lib', 'Nom'),
            TextEditorField::new('description'),
            AssociationField::new('SousCategorie'),
            AssociationField::new('fournisseur'),
            SlugField::new('slug')->setTargetFieldName('lib'),
            AssociationField::new('consoleGaming')->hideOnIndex(),
            AssociationField::new('Enceinte')->hideOnIndex(),
            AssociationField::new('Imprimante')->hideOnIndex(),
            AssociationField::new('OrdinateurPortable')->hideOnIndex(),
            AssociationField::new('TelephoneTablette')->hideOnIndex(),
            AssociationField::new('Television')->hideOnIndex(),
            AssociationField::new('UniteCentral')->hideOnIndex(),
            TextField::new('marque'),
            TextField::new('modele', 'Modèle'),
            NumberField::new('hauteur', 'Hauteur (en cm)')->hideOnIndex(),
            NumberField::new('largeur', 'Largeur (en cm)')->hideOnIndex(),
            NumberField::new('profondeur', 'Prodondeur (en cm)')->hideOnIndex(),
            NumberField::new('poid', 'Poid (en g)')->hideOnIndex(),
            NumberField::new('sold'),
            TextField::new('couleur'),
            ImageField::new('photo')
                ->setBasePath('assets\img\produits')
                ->setUploadDir('public\assets\img\produits'),
            MoneyField::new('prix')->setCurrency('EUR'),
            MoneyField::new('prix_ht', 'Prox hors taxe')->setCurrency('EUR'),
        ];
    }
  
}
