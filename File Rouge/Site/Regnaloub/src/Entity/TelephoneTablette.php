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
    private ?int $prod_id = null;

    #[ORM\Column(length: 20)]
    private ?string $tel_sys_expl = null;

    #[ORM\Column(length: 30)]
    private ?string $tel_type_sim = null;

    #[ORM\Column]
    private ?int $tel_nbr_sim = null;

    #[ORM\Column(length: 60)]
    private ?string $tel_proc = null;

    #[ORM\Column(length: 50)]
    private ?string $tel_type_charge = null;

    #[ORM\Column(length: 50)]
    private ?string $tel_proc_modele = null;

    #[ORM\Column(length: 30)]
    private ?string $tel_bat = null;

    #[ORM\Column(length: 20)]
    private ?string $tel_etat_bat = null;

    #[ORM\Column(length: 50)]
    private ?string $tel_taille_ecran = null;

    #[ORM\Column(length: 50)]
    private ?string $tel_res_ecran = null;

    #[ORM\Column(length: 50)]
    private ?string $tel_freq_ecran = null;

    #[ORM\Column(length: 10)]
    private ?string $tel_reseau = null;

    #[ORM\Column(length: 10)]
    private ?string $tel_bluetooth = null;

    #[ORM\Column(length: 10)]
    private ?string $tel_wifi = null;

    #[ORM\Column]
    private ?int $tel_memoire = null;

    #[ORM\Column]
    private ?int $tel_ram = null;

    public function getProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getTelSysExpl(): ?string
    {
        return $this->tel_sys_expl;
    }

    public function setTelSysExpl(string $tel_sys_expl): static
    {
        $this->tel_sys_expl = $tel_sys_expl;

        return $this;
    }

    public function getTelTypeSim(): ?string
    {
        return $this->tel_type_sim;
    }

    public function setTelTypeSim(string $tel_type_sim): static
    {
        $this->tel_type_sim = $tel_type_sim;

        return $this;
    }

    public function getTelNbrSim(): ?int
    {
        return $this->tel_nbr_sim;
    }

    public function setTelNbrSim(int $tel_nbr_sim): static
    {
        $this->tel_nbr_sim = $tel_nbr_sim;

        return $this;
    }

    public function getTelProc(): ?string
    {
        return $this->tel_proc;
    }

    public function setTelProc(string $tel_proc): static
    {
        $this->tel_proc = $tel_proc;

        return $this;
    }

    public function getTelTypeCharge(): ?string
    {
        return $this->tel_type_charge;
    }

    public function setTelTypeCharge(string $tel_type_charge): static
    {
        $this->tel_type_charge = $tel_type_charge;

        return $this;
    }

    public function getTelProcModele(): ?string
    {
        return $this->tel_proc_modele;
    }

    public function setTelProcModele(string $tel_proc_modele): static
    {
        $this->tel_proc_modele = $tel_proc_modele;

        return $this;
    }

    public function getTelBat(): ?string
    {
        return $this->tel_bat;
    }

    public function setTelBat(string $tel_bat): static
    {
        $this->tel_bat = $tel_bat;

        return $this;
    }

    public function getTelEtatBat(): ?string
    {
        return $this->tel_etat_bat;
    }

    public function setTelEtatBat(string $tel_etat_bat): static
    {
        $this->tel_etat_bat = $tel_etat_bat;

        return $this;
    }

    public function getTelTailleEcran(): ?string
    {
        return $this->tel_taille_ecran;
    }

    public function setTelTailleEcran(string $tel_taille_ecran): static
    {
        $this->tel_taille_ecran = $tel_taille_ecran;

        return $this;
    }

    public function getTelResEcran(): ?string
    {
        return $this->tel_res_ecran;
    }

    public function setTelResEcran(string $tel_res_ecran): static
    {
        $this->tel_res_ecran = $tel_res_ecran;

        return $this;
    }

    public function getTelFreqEcran(): ?string
    {
        return $this->tel_freq_ecran;
    }

    public function setTelFreqEcran(string $tel_freq_ecran): static
    {
        $this->tel_freq_ecran = $tel_freq_ecran;

        return $this;
    }

    public function getTelReseau(): ?string
    {
        return $this->tel_reseau;
    }

    public function setTelReseau(string $tel_reseau): static
    {
        $this->tel_reseau = $tel_reseau;

        return $this;
    }

    public function getTelBluetooth(): ?string
    {
        return $this->tel_bluetooth;
    }

    public function setTelBluetooth(string $tel_bluetooth): static
    {
        $this->tel_bluetooth = $tel_bluetooth;

        return $this;
    }

    public function getTelWifi(): ?string
    {
        return $this->tel_wifi;
    }

    public function setTelWifi(string $tel_wifi): static
    {
        $this->tel_wifi = $tel_wifi;

        return $this;
    }

    public function getTelMemoire(): ?int
    {
        return $this->tel_memoire;
    }

    public function setTelMemoire(int $tel_memoire): static
    {
        $this->tel_memoire = $tel_memoire;

        return $this;
    }

    public function getTelRam(): ?int
    {
        return $this->tel_ram;
    }

    public function setTelRam(int $tel_ram): static
    {
        $this->tel_ram = $tel_ram;

        return $this;
    }
}
