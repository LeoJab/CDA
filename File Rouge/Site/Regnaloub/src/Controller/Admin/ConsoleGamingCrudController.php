<?php

namespace App\Controller\Admin;

use App\Entity\ConsoleGaming;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ConsoleGamingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConsoleGaming::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('libAsso', "Nom du produit"),
            NumberField::new('port_usb', 'Nombre de port USB'),
            NumberField::new('port_hdmi'),
            NumberField::new('disque_dur', 'Disque Dur (en Go)'),
            TextField::new('resolution'),
            NumberField::new('fps'),
        ];
    }
    
}
