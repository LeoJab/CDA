<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $fac_tot_ttc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $fac_tot_prix_ht = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fac_date = null;

    #[ORM\Column(length: 100)]
    private ?string $fac_adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $fac_tva = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFacTotTtc(): ?string
    {
        return $this->fac_tot_ttc;
    }

    public function setFacTotTtc(string $fac_tot_ttc): static
    {
        $this->fac_tot_ttc = $fac_tot_ttc;

        return $this;
    }

    public function getFacTotPrixHt(): ?string
    {
        return $this->fac_tot_prix_ht;
    }

    public function setFacTotPrixHt(string $fac_tot_prix_ht): static
    {
        $this->fac_tot_prix_ht = $fac_tot_prix_ht;

        return $this;
    }

    public function getFacDate(): ?\DateTimeInterface
    {
        return $this->fac_date;
    }

    public function setFacDate(\DateTimeInterface $fac_date): static
    {
        $this->fac_date = $fac_date;

        return $this;
    }

    public function getFacAdresse(): ?string
    {
        return $this->fac_adresse;
    }

    public function setFacAdresse(string $fac_adresse): static
    {
        $this->fac_adresse = $fac_adresse;

        return $this;
    }

    public function getFacTva(): ?string
    {
        return $this->fac_tva;
    }

    public function setFacTva(string $fac_tva): static
    {
        $this->fac_tva = $fac_tva;

        return $this;
    }
}
