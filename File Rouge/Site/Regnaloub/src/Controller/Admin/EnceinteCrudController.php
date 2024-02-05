<?php

namespace App\Controller\Admin;

use App\Entity\Enceinte;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class EnceinteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Enceinte::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('produits', 'slug'),
            TextField::new('puissance', 'Puissance du son'),
            TextField::new('alimentation', "Type d'alimentation"),
            TextField::new('wifi'),
            TextField::new('bluetooth')
        ];
    }
}
