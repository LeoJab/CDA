<?php

namespace App\Entity;

use App\Repository\TelephoneTabletteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TelephoneTabletteRepository::class)]
class TelephoneTablette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $sys_expl = null;

    #[ORM\Column(length: 30)]
    private ?string $type_sim = null;

    #[ORM\Column]
    private ?int $nbr_sim = null;

    #[ORM\Column(length: 60)]
    private ?string $proc = null;

    #[ORM\Column(length: 50)]
    private ?string $type_charge = null;

    #[ORM\Column(length: 50)]
    private ?string $proc_modele = null;

    #[ORM\Column(length: 30)]
    private ?string $bat = null;

    #[ORM\Column(length: 20)]
    private ?string $etat_bat = null;

    #[ORM\Column(length: 50)]
    private ?string $taille_ecran = null;

    #[ORM\Column(length: 50)]
    private ?string $res_ecran = null;

    #[ORM\Column(length: 50)]
    private ?string $freq_ecran = null;

    #[ORM\Column(length: 10)]
    private ?string $reseau = null;

    #[ORM\Column(length: 10)]
    private ?string $bluetooth = null;

    #[ORM\Column(length: 10)]
    private ?string $wifi = null;

    #[ORM\Column]
    private ?int $memoire = null;

    #[ORM\Column]
    private ?int $ram = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSysExpl(): ?string
    {
        return $this->sys_expl;
    }

    public function setSysExpl(string $sys_expl): static
    {
        $this->sys_expl = $sys_expl;

        return $this;
    }

    public function getTypeSim(): ?string
    {
        return $this->type_sim;
    }

    public function setTypeSim(string $type_sim): static
    {
        $this->type_sim = $type_sim;

        return $this;
    }

    public function getNbrSim(): ?int
    {
        return $this->nbr_sim;
    }

    public function setNbrSim(int $nbr_sim): static
    {
        $this->nbr_sim = $nbr_sim;

        return $this;
    }

    public function getProc(): ?string
    {
        return $this->proc;
    }

    public function setProc(string $proc): static
    {
        $this->proc = $proc;

        return $this;
    }

    public function getTypeCharge(): ?string
    {
        return $this->type_charge;
    }

    public function setTypeCharge(string $type_charge): static
    {
        $this->type_charge = $type_charge;

        return $this;
    }

    public function getProcModele(): ?string
    {
        return $this->proc_modele;
    }

    public function setProcModele(string $proc_modele): static
    {
        $this->proc_modele = $proc_modele;

        return $this;
    }

    public function getBat(): ?string
    {
        return $this->bat;
    }

    public function setBat(string $bat): static
    {
        $this->bat = $bat;

        return $this;
    }

    public function getEtatBat(): ?string
    {
        return $this->etat_bat;
    }

    public function setEtatBat(string $etat_bat): static
    {
        $this->etat_bat = $etat_bat;

        return $this;
    }

    public function getTailleEcran(): ?string
    {
        return $this->taille_ecran;
    }

    public function setTailleEcran(string $taille_ecran): static
    {
        $this->taille_ecran = $taille_ecran;

        return $this;
    }

    public function getResEcran(): ?string
    {
        return $this->res_ecran;
    }

    public function setResEcran(string $res_ecran): static
    {
        $this->res_ecran = $res_ecran;

        return $this;
    }

    public function getFreqEcran(): ?string
    {
        return $this->freq_ecran;
    }

    public function setFreqEcran(string $freq_ecran): static
    {
        $this->freq_ecran = $freq_ecran;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(string $reseau): static
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getBluetooth(): ?string
    {
        return $this->bluetooth;
    }

    public function setBluetooth(string $bluetooth): static
    {
        $this->bluetooth = $bluetooth;

        return $this;
    }

    public function getWifi(): ?string
    {
        return $this->wifi;
    }

    public function setWifi(string $wifi): static
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getMemoire(): ?int
    {
        return $this->memoire;
    }

    public function setMemoire(int $memoire): static
    {
        $this->memoire = $memoire;

        return $this;
    }

    public function getRam(): ?int
    {
        return $this->ram;
    }

    public function setRam(int $ram): static
    {
        $this->ram = $ram;

        return $this;
    }
}
