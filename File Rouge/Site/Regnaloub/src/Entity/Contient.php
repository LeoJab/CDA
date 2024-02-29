<?php

namespace App\Entity;

use App\Repository\ContientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: ContientRepository::class)]
#[ApiResource]
class Contient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quant = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $pu = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $pu_ht = null;

    #[ORM\Column]
    private ?int $sold = null;

    #[ORM\ManyToOne(inversedBy: 'produit', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $produit = null;

    #[ORM\ManyToOne(inversedBy: 'facture')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Facture $facture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuant(): ?int
    {
        return $this->quant;
    }

    public function setQuant(int $quant): static
    {
        $this->quant = $quant;

        return $this;
    }

    public function getPu(): ?string
    {
        return $this->pu;
    }

    public function setPu(string $pu): static
    {
        $this->pu = $pu;

        return $this;
    }

    public function getPuHt(): ?string
    {
        return $this->pu_ht;
    }

    public function setPuHt(string $pu_ht): static
    {
        $this->pu_ht = $pu_ht;

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

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): static
    {
        $this->facture = $facture;

        return $this;
    }
}
