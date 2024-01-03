<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $com_id = null;

    #[ORM\Column(length: 50)]
    private ?string $com_suivi = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $com_date = null;

    public function getComId(): ?int
    {
        return $this->com_id;
    }

    public function getComSuivi(): ?string
    {
        return $this->com_suivi;
    }

    public function setComSuivi(string $com_suivi): static
    {
        $this->com_suivi = $com_suivi;

        return $this;
    }

    public function getComDate(): ?\DateTimeInterface
    {
        return $this->com_date;
    }

    public function setComDate(\DateTimeInterface $com_date): static
    {
        $this->com_date = $com_date;

        return $this;
    }
}
