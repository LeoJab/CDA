<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use App\Repository\ProduitRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class,
    properties: ["SousCategorie.id" => "exact"]
)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $ref = null;

    #[ORM\Column(length: 60)]
    private ?string $lib = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix_ht = null;

    #[ORM\Column(length: 50)]
    private ?string $marque = null;

    #[ORM\Column(length: 100)]
    private ?string $modele = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $hauteur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $largeur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $profondeur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $poid = null;

    #[ORM\Column]
    private ?int $sold = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousCategorie $SousCategorie = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fournisseur = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Contient::class, orphanRemoval: true)]
    private Collection $produit;

    #[ORM\Column(length: 20)]
    private ?string $couleur = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?ConsoleGaming $consoleGaming = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Enceinte $Enceinte = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Imprimante $Imprimante = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?OrdinateurPortable $OrdinateurPortable = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?TelephoneTablette $TelephoneTablette = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Television $Television = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?UniteCentral $UniteCentral = null;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): static
    {
        $this->ref = $ref;

        return $this;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): static
    {
        $this->lib = $lib;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPrixHt(): ?string
    {
        return $this->prix_ht;
    }

    public function setPrixHt(string $prix_ht): static
    {
        $this->prix_ht = $prix_ht;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getHauteur(): ?string
    {
        return $this->hauteur;
    }

    public function setHauteur(string $hauteur): static
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getLargeur(): ?string
    {
        return $this->largeur;
    }

    public function setLargeur(string $largeur): static
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getProfondeur(): ?string
    {
        return $this->profondeur;
    }

    public function setProfondeur(string $profondeur): static
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    public function getPoid(): ?string
    {
        return $this->poid;
    }

    public function setPoid(string $poid): static
    {
        $this->poid = $poid;

        return $this;
    }

    public function getSold(): ?int
    {
        return $this->sold;
    }

    public function setSold(int $sold): static
    {
        $this->sold = $sold;

        return $this;
    }

    public function getSousCategorie(): ?sousCategorie
    {
        return $this->SousCategorie;
    }

    public function setSousCategorie(?sousCategorie $SousCategorie): static
    {
        $this->SousCategorie = $SousCategorie;

        return $this;
    }

    public function getFournisseur(): ?fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Contient $produit): static
    {
        if (!$this->produit->contains($produit)) {
            $this->produit->add($produit);
            $produit->setProduit($this);
        }

        return $this;
    }

    public function removeProduit(Contient $produit): static
    {
        if ($this->produit->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getProduit() === $this) {
                $produit->setProduit(null);
            }
        }

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getConsoleGaming(): ?ConsoleGaming
    {
        return $this->consoleGaming;
    }

    public function setConsoleGaming(?ConsoleGaming $consoleGaming): static
    {
        $this->consoleGaming = $consoleGaming;

        return $this;
    }

    public function getEnceinte(): ?Enceinte
    {
        return $this->Enceinte;
    }

    public function setEnceinte(?Enceinte $Enceinte): static
    {
        $this->Enceinte = $Enceinte;

        return $this;
    }

    public function getImprimante(): ?Imprimante
    {
        return $this->Imprimante;
    }

    public function setImprimante(?Imprimante $Imprimante): static
    {
        $this->Imprimante = $Imprimante;

        return $this;
    }

    public function getOrdinateurPortable(): ?OrdinateurPortable
    {
        return $this->OrdinateurPortable;
    }

    public function setOrdinateurPortable(?OrdinateurPortable $OrdinateurPortable): static
    {
        $this->OrdinateurPortable = $OrdinateurPortable;

        return $this;
    }

    public function getTelephoneTablette(): ?TelephoneTablette
    {
        return $this->TelephoneTablette;
    }

    public function setTelephoneTablette(?TelephoneTablette $TelephoneTablette): static
    {
        $this->TelephoneTablette = $TelephoneTablette;

        return $this;
    }

    public function getTelevision(): ?Television
    {
        return $this->Television;
    }

    public function setTelevision(?Television $Television): static
    {
        $this->Television = $Television;

        return $this;
    }

    public function getUniteCentral(): ?UniteCentral
    {
        return $this->UniteCentral;
    }

    public function setUniteCentral(?UniteCentral $UniteCentral): static
    {
        $this->UniteCentral = $UniteCentral;

        return $this;
    }

    public function __toString()
    {
        return $this->lib;
    }
    
}