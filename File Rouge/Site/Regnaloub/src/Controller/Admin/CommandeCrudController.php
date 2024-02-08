<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class CommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commande::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            AssociationField::new('utilisateur', 'Email'),
            DateField::new('date', 'Date de commande'),
            ChoiceField::new('suivi')->setChoices([
                'Annulé' => 'danger',
                'Commande validé' => 'success',
                'En cours de préparation' => 'success',
                'En cours de livraison' => 'success',
                'Livrée' => 'success',
            ])

        ];
    }
}
