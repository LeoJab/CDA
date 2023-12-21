<?php

namespace App\Entity;

use App\Repository\ContientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContientRepository::class)]
class Contient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $prod_quant = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_pu = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prod_pu_ht = null;

    #[ORM\Column]
    private ?int $prod_sold = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdQuant(): ?int
    {
        return $this->prod_quant;
    }

    public function setProdQuant(int $prod_quant): static
    {
        $this->prod_quant = $prod_quant;

        return $this;
    }

    public function getProdPu(): ?string
    {
        return $this->prod_pu;
    }

    public function setProdPu(string $prod_pu): static
    {
        $this->prod_pu = $prod_pu;

        return $this;
    }

    public function getProdPuHt(): ?string
    {
        return $this->prod_pu_ht;
    }

    public function setProdPuHt(string $prod_pu_ht): static
    {
        $this->prod_pu_ht = $prod_pu_ht;

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
