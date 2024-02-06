<?php

namespace App\Controller\Admin;

use App\Entity\Television;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TelevisionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Television::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('lib_asso', "Nom du produit"),
            TextField::new('resolution', 'Résolution'),
            TextField::new('def', 'Définition'),
            TextField::new('techno', 'Technologie'),
            TextField::new('proc', 'Processeur'),
            TextField::new('son_puiss', 'Son puissance'),
            NumberField::new('port_hdmi', 'Nombre de port HDMI'),
            NumberField::new('port_usb', 'Nombre de port USB'),
        ];
    }
    
}
