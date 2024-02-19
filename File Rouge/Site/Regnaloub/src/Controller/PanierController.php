<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Utilisateur;
use App\Entity\Facture;
use App\Entity\Commande;
use App\Entity\Contient;

use App\Services\Panier;
use DateTime;
use DateTimeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function panier(SessionInterface $session): Response
    {
        $panier = $session->get("panier", []);

        return $this->render('main/panier.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/add/{produit}', name: 'app_panier_add')]
    public function add(Produit $produit, Panier $service_panier): Response
    {
        
        $service_panier->add($produit);

        return $this->redirect("/panier");

    }

    #[Route('/remove/{produit}', name: 'app_panier_remove')]
    public function remove(Produit $produit, Panier $service_panier): Response
    {
        
        $service_panier->remove($produit);

        return $this->redirect("/panier");

    }

    #[Route('/delete/{produit}', name: 'app_panier_delete')]
    public function delete(Produit $produit, Panier $service_panier): Response
    {
        
        $service_panier->delete($produit);

        return $this->redirect("/panier");

    }

    #[Route('/validation_panier', name: 'validation_panier')]
    public function validationPanier(SessionInterface $session, MailerInterface $mailer): Response
    {
        $user = new Utilisateur();
        $panier = $session->get("panier", []);
        $date = new \DateTime('@'.strtotime('now'));

        //Envoie du mail de confirmation
        /*$email = (new TemplatedEmail())
            ->from('regnaloub@gmail.com')
            ->to($user->getEmail())
            ->subject('Validation de votre commande')
            ->htmlTemplate('mails/validationPanier.html.twig')
            ->context([
                    'panier' => $panier,
                ]);

        $mailer->send($email);*/

        //Création de la commande
        $commande = new Commande();
        $commande->setUtilisateur($user->getEmail());
        $commande->setSuivi('En cours de préparation');
        $commande->setDate($date);

        dd($commande);
        //Création de la facture
        $facture = new Facture();
        //Insertion des données dans la table contient
        $contient = new Contient();

        return $this->render('main/validationPanier.html.twig');
    }

    #[Route('/mailPanier', name: 'mail_panier')]
    public function mailPanier(SessionInterface $session): Response
    {
        $panier = $session->get("panier", []);

        return $this->render('mails/validationPanier.html.twig', [
            'panier' => $panier,
        ]);
    }
}