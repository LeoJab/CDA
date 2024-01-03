<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $uti_id = null;

    #[ORM\Column(length: 30)]
    private ?string $uti_nom = null;

    #[ORM\Column(length: 30)]
    private ?string $uti_prenom = null;

    #[ORM\Column(length: 30)]
    private ?string $uti_cate = null;

    #[ORM\Column(length: 30)]
    private ?string $uti_role = null;

    #[ORM\Column(length: 100)]
    private ?string $uti_adresse = null;

    #[ORM\Column(length: 100)]
    private ?string $uti_adresse_liv = null;

    #[ORM\Column(length: 100)]
    private ?string $uti_adresse_fac = null;

    #[ORM\Column(length: 40)]
    private ?string $uti_ville = null;

    #[ORM\Column(length: 5)]
    private ?string $uti_cp = null;

    #[ORM\Column(length: 20)]
    private ?string $uti_tel = null;

    #[ORM\Column(length: 80)]
    private ?string $uti_mail = null;

    #[ORM\Column(length: 255)]
    private ?string $uti_mdp = null;

    public function getUtiId(): ?int
    {
        return $this->uti_id;
    }

    public function getUtiNom(): ?string
    {
        return $this->uti_nom;
    }

    public function setUtiNom(string $uti_nom): static
    {
        $this->uti_nom = $uti_nom;

        return $this;
    }

    public function getUtiPrenom(): ?string
    {
        return $this->uti_prenom;
    }

    public function setUtiPrenom(string $uti_prenom): static
    {
        $this->uti_prenom = $uti_prenom;

        return $this;
    }

    public function getUtiCate(): ?string
    {
        return $this->uti_cate;
    }

    public function setUtiCate(string $uti_cate): static
    {
        $this->uti_cate = $uti_cate;

        return $this;
    }

    public function getUtiRole(): ?string
    {
        return $this->uti_role;
    }

    public function setUtiRole(string $uti_role): static
    {
        $this->uti_role = $uti_role;

        return $this;
    }

    public function getUtiAdresse(): ?string
    {
        return $this->uti_adresse;
    }

    public function setUtiAdresse(string $uti_adresse): static
    {
        $this->uti_adresse = $uti_adresse;

        return $this;
    }

    public function getUtiAdresseLiv(): ?string
    {
        return $this->uti_adresse_liv;
    }

    public function setUtiAdresseLiv(string $uti_adresse_liv): static
    {
        $this->uti_adresse_liv = $uti_adresse_liv;

        return $this;
    }

    public function getUtiAdresseFac(): ?string
    {
        return $this->uti_adresse_fac;
    }

    public function setUtiAdresseFac(string $uti_adresse_fac): static
    {
        $this->uti_adresse_fac = $uti_adresse_fac;

        return $this;
    }

    public function getUtiVille(): ?string
    {
        return $this->uti_ville;
    }

    public function setUtiVille(string $uti_ville): static
    {
        $this->uti_ville = $uti_ville;

        return $this;
    }

    public function getUtiCp(): ?string
    {
        return $this->uti_cp;
    }

    public function setUtiCp(string $uti_cp): static
    {
        $this->uti_cp = $uti_cp;

        return $this;
    }

    public function getUtiTel(): ?string
    {
        return $this->uti_tel;
    }

    public function setUtiTel(string $uti_tel): static
    {
        $this->uti_tel = $uti_tel;

        return $this;
    }

    public function getUtiMail(): ?string
    {
        return $this->uti_mail;
    }

    public function setUtiMail(string $uti_mail): static
    {
        $this->uti_mail = $uti_mail;

        return $this;
    }

    public function getUtiMdp(): ?string
    {
        return $this->uti_mdp;
    }

    public function setUtiMdp(string $uti_mdp): static
    {
        $this->uti_mdp = $uti_mdp;

        return $this;
    }
}
