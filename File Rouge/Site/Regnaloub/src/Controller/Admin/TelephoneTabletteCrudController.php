<?php

namespace App\Controller\Admin;

use App\Entity\TelephoneTablette;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class TelephoneTabletteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TelephoneTablette::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('lib_asso', "Nom du produit"),
            TextField::new('sys_exp', "Système d'exploitation"),
            TextField::new('type_sim', "Type de carte SIM")->hideOnIndex(),
            TextField::new('nbr_sim', "Nombre de carte SIM")->hideOnIndex(),
            TextField::new('proc', "Nom du processeur"),
            TextField::new('proc_modele', "Modèle du processeur"),
            TextField::new('type_charge', "Type de rechargement"),
            TextField::new('bat', "Taille de la batterie"),
            TextField::new('etat_bat', "Etat de la batterie"),
            TextField::new('taille_ecran', "Taille de l'ecran"),
            TextField::new('res_ecran', "Resolution de l'ecran"),
            TextField::new('freq_ecran', "Fréquence de l'ecran"),
            TextField::new('reseau')->hideOnIndex(),
            TextField::new('wifi')->hideOnIndex(),
            TextField::new('bluetooth')->hideOnIndex(),
            TextField::new('memoire', "Quantiter de memoire")->hideOnIndex(),
            TextField::new('ram', "Quantiter de RAM")->hideOnIndex(),
        ];
    }
}
