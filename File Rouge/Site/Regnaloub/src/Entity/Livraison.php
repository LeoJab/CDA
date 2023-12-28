<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $liv_adresse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $liv_date = null;

    #[ORM\Column(length: 50)]
    private ?string $liv_status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivAdresse(): ?string
    {
        return $this->liv_adresse;
    }

    public function setLivAdresse(string $liv_adresse): static
    {
        $this->liv_adresse = $liv_adresse;

        return $this;
    }

    public function getLivDate(): ?\DateTimeInterface
    {
        return $this->liv_date;
    }

    public function setLivDate(\DateTimeInterface $liv_date): static
    {
        $this->liv_date = $liv_date;

        return $this;
    }

    public function getLivStatus(): ?string
    {
        return $this->liv_status;
    }

    public function setLivStatus(string $liv_status): static
    {
        $this->liv_status = $liv_status;

        return $this;
    }
}
