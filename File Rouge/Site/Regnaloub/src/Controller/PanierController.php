<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Utilisateur;
use App\Entity\Facture;
use App\Entity\Commande;
use App\Entity\Contient;
use App\Entity\Livraison;

use App\Repository\ProduitRepository;
use App\Repository\UtilisateurRepository;

use App\Services\Panier;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

use Doctrine\ORM\EntityManagerInterface;

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
    public function validationPanier(SessionInterface $session, Panier $service_panier, MailerInterface $mailer, ProduitRepository $produitRepository, UtilisateurRepository $utilisateurRepository,EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $panier = $session->get('panier', []);
        $date = new \DateTime('@'.strtotime('now'));
        $utilisateur = $utilisateurRepository->find($this->getUser());
        
        if($panier === []){
            $this->addFlash('message', 'Votre panier est vide');
            return $this->redirectToRoute('default');
        }

        // Set des prix
        $totalTtc = 0;
        $totalHt = 0;
        $tva = 0;

        foreach($panier as $item){
            $produit = $produitRepository->find($item['produit']);
            $quantite = $item['quantite'];

            $totalArticleTtc = $produit->getPrix() * $quantite;
            $totalTtc = $totalTtc + $totalArticleTtc;

            $totalArticleHt = $produit->getPrixHt() * $quantite;
            $totalHt = $totalHt + $totalArticleHt;

            $tva = $totalTtc - $totalHt;
        }
        
        // Création de la commande
        $commande = new Commande();
        $commande->setUtilisateur($this->getUser());
        $commande->setSuivi('En cours de préparation');
        $commande->setDate($date);
        $em->persist($commande);

        // Création de la facture
        $facture = new Facture();
        $facture->setAdresse($utilisateur->getAdresseFac());
        $facture->setDate($date);
        $facture->setTotTtc($totalTtc);
        $facture->setTotPrixHt($totalHt);
        $facture->setTva($tva);
        $facture->setCommande($commande);
        $em->persist($facture);

        // Création de la livraison
        $livraison = new Livraison();
        $livraison->setAdresse($utilisateur->getAdresseLiv());
        $livraison->setDate(new \DateTime('@'.strtotime('+4 days')));
        $livraison->setStatus('En attente de reception');
        $livraison->setCommande($commande);
        $em->persist($livraison);

        // Insertion des données dans la table contient
        foreach($panier as $item){
            $produit = $produitRepository->find($item['produit']);
            $quantite = $item['quantite'];

            $contient = new Contient();

            $contient->setQuant($quantite);
            $contient->setPu($produit->getPrix());
            $contient->setPuHt($produit->getPrixHt());
            $contient->setSold($produit->getSold());
            $contient->setProduit($produit);
            $contient->setFacture($facture);
        };
        //dd($facture, $commande, $contient, $livraison);
        $em->persist($commande);
        $em->persist($facture);
        $em->persist($livraison);
        $em->persist($contient);
        $em->flush();

        //Envoie du mail de confirmation
        $email = (new TemplatedEmail())
            ->from('regnaloub@gmail.com')
            ->to($utilisateur->getEmail())
            ->subject('Validation de votre commande')
            ->htmlTemplate('mails/validationPanier.html.twig')
            ->context([
                    'panier' => $panier,
                ]);

        $mailer->send($email);
        
        $service_panier->delete($produit);

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