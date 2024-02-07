<?php

namespace App\Controller\Admin;

use App\Entity\UniteCentral;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class UniteCentralCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UniteCentral::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('lib_asso', "Nom du produit"),
            TextField::new('proc', "Nom du processeur"),
            NumberField::new('proc_freq', "Fréquence du processeur")->hideOnIndex(),
            NumberField::new('proc_nbr_coeur', "Nombre de coeur du processeur")->hideOnIndex(),
            NumberField::new('ram', "Quantité de RAM")->hideOnIndex(),
            TextField::new('ram_type', "Type de la RAM")->hideOnIndex(),
            TextField::new('cg_modele', "Modele de la carte graphique"),
            NumberField::new('stkage', "Quantité de stockage (en Go)")->hideOnIndex(),
            TextField::new('type_stkage', "Type du stockage")->hideOnIndex(),
            TextField::new('wifi')->hideOnIndex(),
            NumberField::new('port_usb', "Nombre de port USB")->hideOnIndex(),
            NumberField::new('port_hdmi', "Nombre de port HDMI")->hideOnIndex(),
            TextField::new('sys_exp', "Système d'exploitation"),
        ];
    }

}
