<?php

namespace App\Controller\Admin;

use App\Entity\Imprimante;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ImprimanteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Imprimante::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('lib_asso', "Nom du produit"),
            TextField::new('type', "Type d'impression"),
            TextField::new('vit', "Vitesse d'impression"),
            TextField::new('qualiter', "Qualiter d'impression papier"),
            TextField::new('qualiter_photo', "Qualiter d'impression photo"),
            TextField::new('format', "Format du papier"),
        ];
    }
    
}
