<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $prod_id = null;

    #[ORM\Column(length: 30)]
    private ?string $prod_ref = null;

    #[ORM\Column(length: 60)]
    private ?string $prod_lib = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $prod_desc = null;

    #[ORM\Column(length: 255)]
    private ?string $prod_prix = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_prix_hit = null;

    #[ORM\Column(length: 50)]
    private ?string $prod_marque = null;

    #[ORM\Column(length: 100)]
    private ?string $prod_modele = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_hauteur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_largeur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_profondeur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_poid = null;

    #[ORM\Column]
    private ?int $prod_sold = null;

    public function getProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getProdRef(): ?string
    {
        return $this->prod_ref;
    }

    public function setProdRef(string $prod_ref): static
    {
        $this->prod_ref = $prod_ref;

        return $this;
    }

    public function getProdLib(): ?string
    {
        return $this->prod_lib;
    }

    public function setProdLib(string $prod_lib): static
    {
        $this->prod_lib = $prod_lib;

        return $this;
    }

    public function getProdDesc(): ?string
    {
        return $this->prod_desc;
    }

    public function setProdDesc(string $prod_desc): static
    {
        $this->prod_desc = $prod_desc;

        return $this;
    }

    public function getProdPrix(): ?string
    {
        return $this->prod_prix;
    }

    public function setProdPrix(string $prod_prix): static
    {
        $this->prod_prix = $prod_prix;

        return $this;
    }

    public function getProdPrixHit(): ?string
    {
        return $this->prod_prix_hit;
    }

    public function setProdPrixHit(string $prod_prix_hit): static
    {
        $this->prod_prix_hit = $prod_prix_hit;

        return $this;
    }

    public function getProdMarque(): ?string
    {
        return $this->prod_marque;
    }

    public function setProdMarque(string $prod_marque): static
    {
        $this->prod_marque = $prod_marque;

        return $this;
    }

    public function getProdModele(): ?string
    {
        return $this->prod_modele;
    }

    public function setProdModele(string $prod_modele): static
    {
        $this->prod_modele = $prod_modele;

        return $this;
    }

    public function getProdHauteur(): ?string
    {
        return $this->prod_hauteur;
    }

    public function setProdHauteur(string $prod_hauteur): static
    {
        $this->prod_hauteur = $prod_hauteur;

        return $this;
    }

    public function getProdLargeur(): ?string
    {
        return $this->prod_largeur;
    }

    public function setProdLargeur(string $prod_largeur): static
    {
        $this->prod_largeur = $prod_largeur;

        return $this;
    }

    public function getProdProfondeur(): ?string
    {
        return $this->prod_profondeur;
    }

    public function setProdProfondeur(string $prod_profondeur): static
    {
        $this->prod_profondeur = $prod_profondeur;

        return $this;
    }

    public function getProdPoid(): ?string
    {
        return $this->prod_poid;
    }

    public function setProdPoid(string $prod_poid): static
    {
        $this->prod_poid = $prod_poid;

        return $this;
    }

    public function getProdSold(): ?int
    {
        return $this->prod_sold;
    }

    public function setProdSold(int $prod_sold): static
    {
        $this->prod_sold = $prod_sold;

        return $this;
    }
}
