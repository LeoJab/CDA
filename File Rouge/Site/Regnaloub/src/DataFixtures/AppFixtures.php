<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\entity\SousCategorie;
use App\entity\Produit;
use App\Entity\MultiMedia;
use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $c1 = new Categorie();
        $c1->setLib("Ordinateur Portable");
        $c1->setDescription("Voici la liste des ordinateurs portables");
        $c1->setPhoto("https://picsum.photos/300/200");
        $manager->persist($c1);

        $sc1 = new SousCategorie();
        $sc1->setLib("ACER");
        $sc1->setDescription("Voici la liste des ordinateurs portables de la marque ACER");
        $sc1->setPhoto("https://picsum.photos/300/200");
        $c1->AddSousCategorie($sc1);
        $manager->persist($sc1);

        $p1 = new Produit();
        $p1->setRef("OP102478");
        $p1->setLib("Odinateur Portable ACER 214");
        $p1->setDescription("L'ordinateur portable ergonomique et léger");
        $p1->setPrix(600.99);
        $p1->setPrixHt(580);
        $p1->setMarque("ACER");
        $p1->setModele("ZenBook 5");
        $p1->setCouleur("Noir");
        $p1->setPhoto("https://picsum.photos/300/200");
        $p1->setHauteur(25.8);
        $p1->setLargeur(30.2);
        $p1->setProfondeur(25.6);
        $p1->setPoid(800);
        $p1->setSold(0);
        $sc1->addProduit($p1);
        $manager->persist($p1);
        
        $c2 = new Categorie();
        $c2->setLib("Téléphone Mobile");
        $c2->setDescription("Voici la liste des tléphones portables");
        $c2->setPhoto("https://picsum.photos/300/200");
        $manager->persist($c2);

        $sc2 = new SousCategorie();
        $sc2->setLib("Samsung");
        $sc2->setDescription("Voici la liste des tléphones portables de la marque Samsung");
        $sc2->setPhoto("https://picsum.photos/300/200");
        $c2->addSousCategorie($sc2);
        $manager->persist($sc2);

        $p2 = new Produit();
        $p2->setRef("TEL214587");
        $p2->setLib("Téléphone Mobile Samsung A10");
        $p2->setDescription("Le téléphone ergonomique et léger");
        $p2->setPrix(600.99);
        $p2->setPrixHt(580);
        $p2->setMarque("Samsung");
        $p2->setModele("A10");
        $p2->setCouleur("Noir");
        $p2->setPhoto("https://picsum.photos/300/200");
        $p2->setHauteur(10);
        $p2->setLargeur(4.6);
        $p2->setProfondeur(1.2);
        $p2->setPoid(350);
        $p2->setSold(0);
        $sc2->AddProduit($p2);
        $manager->persist($p2);

        $c3 = new Categorie();
        $c3->SetLib("Console Gaming");
        $c3->SetDescription("Voici la liste des consoles de jeux");
        $c3->SetPhoto("https://picsum.photos/300/200");
        $manager->persist($c3);

        $sc3 = new SousCategorie();
        $sc3->SetLib("PlayStation");
        $sc3->SetDescription("Voici la liste des consoles de jeux de la marque PlayStation");
        $sc3->SetPhoto("https://picsum.photos/300/200");
        $c3->AddSousCategorie($sc3);
        $manager->persist($sc3);

        $p3 = new Produit();
        $p3->SetRef("CG256478");
        $p3->SetLib("PlayStation 5");
        $p3->SetDescription("La console ergonomique et légère");
        $p3->SetPrix(600.99);
        $p3->SetPrixHt(580);
        $p3->SetMarque("PlayStation");
        $p3->SetModele("PS5");
        $p3->SetCouleur("Blanche");
        $p3->setPhoto("https://picsum.photos/300/200");
        $p3->SetHauteur(36.4);
        $p3->SetLargeur(16.3);
        $p3->SetProfondeur(6.5);
        $p3->SetPoid(980);
        $p3->SetSold(5);
        $sc3->AddProduit($p3);
        $manager->persist($p3);

        $f1 = new Fournisseur();
        $f1->SetRef("F021458");
        $f1->SetNom("test");
        $f1->SetAdresse("1 rue des cailloux");
        $f1->SetVille("Amiens");
        $f1->SetCp("80000");
        $f1->SetEmail("fournisseur@gmail.com");
        $f1->SetTel("0621521458");
        $f1->AddProduit($p1);
        $f1->AddProduit($p2);
        $f1->AddProduit($p3);
        $manager->persist($f1);

        $manager->flush();
    }
}
