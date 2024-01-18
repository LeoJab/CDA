<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\entity\SousCategorie;
use App\entity\Produit;
use App\Entity\MultiMedia;
use App\Entity\Fournisseur;
use App\Entity\TelephoneTablette;
use App\Entity\Television;
use App\Entity\OrdinateurPortable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        /* CATEGORIES */
        $c1 = new Categorie();
        $c1->setLib("Ordinateur Portable");
        $c1->setDescription("Voici la liste des ordinateurs portables");
        $c1->setPhoto("https://picsum.photos/300/200");
        $manager->persist($c1);

        $c2 = new Categorie();
        $c2->setLib("Téléphone Mobile");
        $c2->setDescription("Voici la liste des tléphones portables");
        $c2->setPhoto("https://picsum.photos/100/800");
        $manager->persist($c2);

        $c3 = new Categorie();
        $c3->SetLib("Console Gaming");
        $c3->SetDescription("Voici la liste des consoles de jeux");
        $c3->SetPhoto("https://picsum.photos/250/200");
        $manager->persist($c3);
        
        $c4 = new Categorie();
        $c4->setLib("Unité centrale");
        $c4->setDescription("Voici la liste des unités centrales");
        $c4->setPhoto("https://picsum.photos/700/200");
        $manager->persist($c4);

        $c5 = new Categorie();
        $c5->setLib("Imprimante");
        $c5->setDescription("Voici la liste des imprimantes");
        $c5->setPhoto("https://picsum.photos/100/200");
        $manager->persist($c5);

        $c6 = new Categorie();
        $c6->setLib("Enceinte");
        $c6->setDescription("Voici la liste des enceintes");
        $c6->setPhoto("https://picsum.photos/300/900");
        $manager->persist($c6);

        $c7 = new Categorie();
        $c7->setLib("Télévision");
        $c7->setDescription("Voici la liste des télévisions");
        $c7->setPhoto("https://picsum.photos/300/100");
        $manager->persist($c7);


        /* SOUS CATEGORIES */
        $sc1 = new SousCategorie();
        $sc1->setLib("ACER");
        $sc1->setDescription("Voici la liste des ordinateurs portables de la marque ACER");
        $sc1->setPhoto("https://picsum.photos/320/200");
        $c1->AddSousCategorie($sc1);
        $manager->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2->setLib("Samsung");
        $sc2->setDescription("Voici la liste des tléphones portables de la marque Samsung");
        $sc2->setPhoto("https://picsum.photos/410/200");
        $c2->addSousCategorie($sc2);
        $manager->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3->SetLib("PlayStation");
        $sc3->SetDescription("Voici la liste des consoles de jeux de la marque PlayStation");
        $sc3->SetPhoto("https://picsum.photos/300/520");
        $c3->AddSousCategorie($sc3);
        $manager->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4->SetLib("MSI");
        $sc4->SetDescription("Voici la liste des consoles de jeux de la marque MSI");
        $sc4->SetPhoto("https://picsum.photos/840/200");
        $c4->AddSousCategorie($sc4);
        $manager->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5->SetLib("Epson");
        $sc5->SetDescription("Voici la liste des consoles de jeux de la marque Epson");
        $sc5->SetPhoto("https://picsum.photos/890/750");
        $c5->AddSousCategorie($sc5);
        $manager->persist($sc5);

        $sc6 = new SousCategorie();
        $sc6->SetLib("JBL");
        $sc6->SetDescription("Voici la liste des consoles de jeux de la marque JBL");
        $sc6->SetPhoto("https://picsum.photos/980/230");
        $c6->AddSousCategorie($sc6);
        $manager->persist($sc6);

        $sc7 = new SousCategorie();
        $sc7->SetLib("Qlive");
        $sc7->SetDescription("Voici la liste des consoles de jeux de la marque Qlive");
        $sc7->SetPhoto("https://picsum.photos/140/500");
        $c7->AddSousCategorie($sc7);
        $manager->persist($sc7);


        /* PRODUITS */
        $p1 = new Produit();
        $p1->setRef("OP102478");
        $p1->setLib("Odinateur Portable ACER 214");
        $p1->SetSlug("ordinateur-portable-acer-214");
        $p1->setDescription("L'ordinateur portable ergonomique et léger");
        $p1->setPrix(600.99);
        $p1->setPrixHt(580);
        $p1->setMarque("ACER");
        $p1->setModele("ZenBook 5");
        $p1->setCouleur("Noir");
        $p1->setPhoto("https://picsum.photos/540/540");
        $p1->setHauteur(25.8);
        $p1->setLargeur(30.2);
        $p1->setProfondeur(25.6);
        $p1->setPoid(800);
        $p1->setSold(0);
        $sc1->addProduit($p1);
        $manager->persist($p1);

        $p2 = new Produit();
        $p2->setRef("TEL214587");
        $p2->setLib("Téléphone Mobile Samsung A10");
        $p2->SetSlug("telephone-mobile-samsung-a10");
        $p2->setDescription("Le téléphone ergonomique et léger");
        $p2->setPrix(600.99);
        $p2->setPrixHt(580);
        $p2->setMarque("Samsung");
        $p2->setModele("A10");
        $p2->setCouleur("Noir");
        $p2->setPhoto("https://picsum.photos/240/890");
        $p2->setHauteur(10);
        $p2->setLargeur(4.6);
        $p2->setProfondeur(1.2);
        $p2->setPoid(350);
        $p2->setSold(0);
        $sc2->AddProduit($p2);
        $manager->persist($p2);

        $p3 = new Produit();
        $p3->SetRef("CG256478");
        $p3->SetLib("PlayStation 5");
        $p3->SetSlug("playstation-ps5");
        $p3->SetDescription("La console ergonomique et légère");
        $p3->SetPrix(600.99);
        $p3->SetPrixHt(580);
        $p3->SetMarque("PlayStation");
        $p3->SetModele("PS5");
        $p3->SetCouleur("Blanche");
        $p3->setPhoto("https://picsum.photos/960/290");
        $p3->SetHauteur(36.4);
        $p3->SetLargeur(16.3);
        $p3->SetProfondeur(6.5);
        $p3->SetPoid(980);
        $p3->SetSold(5);
        $sc3->AddProduit($p3);
        $manager->persist($p3);

        $p4 = new Produit();
        $p4->SetRef("CG256478");
        $p4->SetLib("MSI Rog 25148");
        $p4->SetSlug("msi-rog-25148");
        $p4->SetDescription("La console ergonomique et légère");
        $p4->SetPrix(600.99);
        $p4->SetPrixHt(580);
        $p4->SetMarque("PlayStation");
        $p4->SetModele("PS5");
        $p4->SetCouleur("Blanche");
        $p4->setPhoto("https://picsum.photos/150/20");
        $p4->SetHauteur(36.4);
        $p4->SetLargeur(16.3);
        $p4->SetProfondeur(6.5);
        $p4->SetPoid(980);
        $p4->SetSold(5);
        $sc4->AddProduit($p4);
        $manager->persist($p4);

        $p5 = new Produit();
        $p5->SetRef("CG256478");
        $p5->SetLib("Epson MultiColor 2514");
        $p5->SetSlug("epson-multicolor-2514");
        $p5->SetDescription("La console ergonomique et légère");
        $p5->SetPrix(600.99);
        $p5->SetPrixHt(580);
        $p5->SetMarque("PlayStation");
        $p5->SetModele("PS5");
        $p5->SetCouleur("Blanche");
        $p5->setPhoto("https://picsum.photos/640/570");
        $p5->SetHauteur(36.4);
        $p5->SetLargeur(16.3);
        $p5->SetProfondeur(6.5);
        $p5->SetPoid(980);
        $p5->SetSold(5);
        $sc5->AddProduit($p5);
        $manager->persist($p5);

        $p6 = new Produit();
        $p6->SetRef("CG256478");
        $p6->SetLib("JBL BoomBox 5");
        $p6->SetSlug("jbl-boombox-5");
        $p6->SetDescription("La console ergonomique et légère");
        $p6->SetPrix(600.99);
        $p6->SetPrixHt(580);
        $p6->SetMarque("PlayStation");
        $p6->SetModele("PS5");
        $p6->SetCouleur("Blanche");
        $p6->setPhoto("https://picsum.photos/30/90");
        $p6->SetHauteur(36.4);
        $p6->SetLargeur(16.3);
        $p6->SetProfondeur(6.5);
        $p6->SetPoid(980);
        $p6->SetSold(5);
        $sc6->AddProduit($p6);
        $manager->persist($p6);

        $p7 = new Produit();
        $p7->SetRef("CG256478");
        $p7->SetLib('écran plat 125"');
        $p7->SetSlug("ecran-plat-125");
        $p7->SetDescription("La console ergonomique et légère");
        $p7->SetPrix(600.99);
        $p7->SetPrixHt(580);
        $p7->SetMarque("PlayStation");
        $p7->SetModele("PS5");
        $p7->SetCouleur("Blanche");
        $p7->setPhoto("https://picsum.photos/910/915");
        $p7->SetHauteur(36.4);
        $p7->SetLargeur(16.3);
        $p7->SetProfondeur(6.5);
        $p7->SetPoid(980);
        $p7->SetSold(5);
        $sc7->AddProduit($p7);
        $manager->persist($p7);

        $p8 = new Produit();
        $p8->SetRef("CG256478");
        $p8->SetLib("Casque Bluetooth Sony");
        $p8->SetSlug("casque-bluetooth-sony");
        $p8->SetDescription("La console ergonomique et légère");
        $p8->SetPrix(600.99);
        $p8->SetPrixHt(580);
        $p8->SetMarque("PlayStation");
        $p8->SetModele("PS5");
        $p8->SetCouleur("Blanche");
        $p8->setPhoto("https://picsum.photos/500/200");
        $p8->SetHauteur(36.4);
        $p8->SetLargeur(16.3);
        $p8->SetProfondeur(6.5);
        $p8->SetPoid(980);
        $p8->SetSold(5);
        $sc3->AddProduit($p8);
        $manager->persist($p8);

        $p9 = new Produit();
        $p9->SetRef("CG256478");
        $p9->SetLib("Casque Audio PlayStation");
        $p9->SetSlug("casque-audio-playstation");
        $p9->SetDescription("La console ergonomique et légère");
        $p9->SetPrix(600.99);
        $p9->SetPrixHt(580);
        $p9->SetMarque("PlayStation");
        $p9->SetModele("PS5");
        $p9->SetCouleur("Blanche");
        $p9->setPhoto("https://picsum.photos/810/180");
        $p9->SetHauteur(36.4);
        $p9->SetLargeur(16.3);
        $p9->SetProfondeur(6.5);
        $p9->SetPoid(980);
        $p9->SetSold(5);
        $sc3->AddProduit($p9);
        $manager->persist($p9);

        $p10 = new Produit();
        $p10->SetRef("CG256478");
        $p10->SetLib("Manette PS4");
        $p10->SetSlug("manette-ps4");
        $p10->SetDescription("La console ergonomique et légère");
        $p10->SetPrix(600.99);
        $p10->SetPrixHt(580);
        $p10->SetMarque("PlayStation");
        $p10->SetModele("PS5");
        $p10->SetCouleur("Blanche");
        $p10->setPhoto("https://picsum.photos/670/250");
        $p10->SetHauteur(36.4);
        $p10->SetLargeur(16.3);
        $p10->SetProfondeur(6.5);
        $p10->SetPoid(980);
        $p10->SetSold(5);
        $sc3->AddProduit($p10);
        $manager->persist($p10);

        /* TELEVISIONS */
        $tel1 = new Television();
        $tel1->setResolution("3840x2160");
        $tel1->setDef("4K");
        $tel1->setTechno("Oled");
        $tel1->setProc("Crystal Processor 4K");
        $tel1->setSonPuiss("40 KW");
        $tel1->setPortHdmi(4);
        $tel1->setPortUsb(6);
        $tel1->AddProduit($p7);
        $manager->persist($tel1);

        /* Ordinateur Portable */
        $op1 = new OrdinateurPortable();
        $op1->setResolution('2880x1800');
        $op1->setWebcam('Oui');
        $op1->setProc('Intel Core i7');
        $op1->setProcFreq(2.1);
        $op1->setProcNbrCoeur('12');
        $op1->setRam('16');
        $op1->setRamFreq('')

        /* FOURNISSEURS */
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
        $f1->AddProduit($p4);
        $f1->AddProduit($p5);
        $f1->AddProduit($p6);
        $f1->AddProduit($p7);
        $f1->AddProduit($p8);
        $f1->AddProduit($p9);
        $f1->AddProduit($p10);
        $manager->persist($f1);

        $manager->flush();
    }
}
