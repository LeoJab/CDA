<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $paie_id = null;

    #[ORM\Column(length: 50)]
    private ?string $paie_mode = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $paie_date = null;

    #[ORM\Column(length: 80)]
    private ?string $paie_status = null;

    public function getPaieId(): ?int
    {
        return $this->paie_id;
    }

    public function getPaieMode(): ?string
    {
        return $this->paie_mode;
    }

    public function setPaieMode(string $paie_mode): static
    {
        $this->paie_mode = $paie_mode;

        return $this;
    }

    public function getPaieDate(): ?\DateTimeInterface
    {
        return $this->paie_date;
    }

    public function setPaieDate(\DateTimeInterface $paie_date): static
    {
        $this->paie_date = $paie_date;

        return $this;
    }

    public function getPaieStatus(): ?string
    {
        return $this->paie_status;
    }

    public function setPaieStatus(string $paie_status): static
    {
        $this->paie_status = $paie_status;

        return $this;
    }
}
