<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $fourni_id = null;

    #[ORM\Column(length: 30)]
    private ?string $fourni_ref = null;

    #[ORM\Column(length: 30)]
    private ?string $fourni_nom = null;

    #[ORM\Column(length: 100)]
    private ?string $founi_adresse = null;

    #[ORM\Column(length: 50)]
    private ?string $fourni_ville = null;

    #[ORM\Column(length: 5)]
    private ?string $fourni_cp = null;

    #[ORM\Column(length: 50)]
    private ?string $fourni_email = null;

    #[ORM\Column(length: 15)]
    private ?string $fourni_tel = null;

    public function getFourniId(): ?int
    {
        return $this->fourni_id;
    }

    public function getFourniRef(): ?string
    {
        return $this->fourni_ref;
    }

    public function setFourniRef(string $fourni_ref): static
    {
        $this->fourni_ref = $fourni_ref;

        return $this;
    }

    public function getFourniNom(): ?string
    {
        return $this->fourni_nom;
    }

    public function setFourniNom(string $fourni_nom): static
    {
        $this->fourni_nom = $fourni_nom;

        return $this;
    }

    public function getFouniAdresse(): ?string
    {
        return $this->founi_adresse;
    }

    public function setFouniAdresse(string $founi_adresse): static
    {
        $this->founi_adresse = $founi_adresse;

        return $this;
    }

    public function getFourniVille(): ?string
    {
        return $this->fourni_ville;
    }

    public function setFourniVille(string $fourni_ville): static
    {
        $this->fourni_ville = $fourni_ville;

        return $this;
    }

    public function getFourniCp(): ?string
    {
        return $this->fourni_cp;
    }

    public function setFourniCp(string $fourni_cp): static
    {
        $this->fourni_cp = $fourni_cp;

        return $this;
    }

    public function getFourniEmail(): ?string
    {
        return $this->fourni_email;
    }

    public function setFourniEmail(string $fourni_email): static
    {
        $this->fourni_email = $fourni_email;

        return $this;
    }

    public function getFourniTel(): ?string
    {
        return $this->fourni_tel;
    }

    public function setFourniTel(string $fourni_tel): static
    {
        $this->fourni_tel = $fourni_tel;

        return $this;
    }
}
