<?php

namespace App\Entity;

use App\Repository\UniteCentralRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniteCentralRepository::class)]
class UniteCentral
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $uc_proc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $uc_proc_frequence = null;

    #[ORM\Column]
    private ?int $uc_proc_nbr_coeur = null;

    #[ORM\Column]
    private ?int $uc_ram = null;

    #[ORM\Column(length: 20)]
    private ?string $uc_ram_type = null;

    #[ORM\Column(length: 50)]
    private ?string $uc_cg_modele = null;

    #[ORM\Column]
    private ?int $uc_stkage = null;

    #[ORM\Column(length: 20)]
    private ?string $uc_type_stkage = null;

    #[ORM\Column(length: 10)]
    private ?string $uc_wifi = null;

    #[ORM\Column]
    private ?int $uc_port_usb = null;

    #[ORM\Column]
    private ?int $uc_port_hdmi = null;

    #[ORM\Column(length: 20)]
    private ?string $uc_sys_expl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUcProc(): ?string
    {
        return $this->uc_proc;
    }

    public function setUcProc(string $uc_proc): static
    {
        $this->uc_proc = $uc_proc;

        return $this;
    }

    public function getUcProcFrequence(): ?string
    {
        return $this->uc_proc_frequence;
    }

    public function setUcProcFrequence(string $uc_proc_frequence): static
    {
        $this->uc_proc_frequence = $uc_proc_frequence;

        return $this;
    }

    public function getUcProcNbrCoeur(): ?int
    {
        return $this->uc_proc_nbr_coeur;
    }

    public function setUcProcNbrCoeur(int $uc_proc_nbr_coeur): static
    {
        $this->uc_proc_nbr_coeur = $uc_proc_nbr_coeur;

        return $this;
    }

    public function getUcRam(): ?int
    {
        return $this->uc_ram;
    }

    public function setUcRam(int $uc_ram): static
    {
        $this->uc_ram = $uc_ram;

        return $this;
    }

    public function getUcRamType(): ?string
    {
        return $this->uc_ram_type;
    }

    public function setUcRamType(string $uc_ram_type): static
    {
        $this->uc_ram_type = $uc_ram_type;

        return $this;
    }

    public function getUcCgModele(): ?string
    {
        return $this->uc_cg_modele;
    }

    public function setUcCgModele(string $uc_cg_modele): static
    {
        $this->uc_cg_modele = $uc_cg_modele;

        return $this;
    }

    public function getUcStkage(): ?int
    {
        return $this->uc_stkage;
    }

    public function setUcStkage(int $uc_stkage): static
    {
        $this->uc_stkage = $uc_stkage;

        return $this;
    }

    public function getUcTypeStkage(): ?string
    {
        return $this->uc_type_stkage;
    }

    public function setUcTypeStkage(string $uc_type_stkage): static
    {
        $this->uc_type_stkage = $uc_type_stkage;

        return $this;
    }

    public function getUcWifi(): ?string
    {
        return $this->uc_wifi;
    }

    public function setUcWifi(string $uc_wifi): static
    {
        $this->uc_wifi = $uc_wifi;

        return $this;
    }

    public function getUcPortUsb(): ?int
    {
        return $this->uc_port_usb;
    }

    public function setUcPortUsb(int $uc_port_usb): static
    {
        $this->uc_port_usb = $uc_port_usb;

        return $this;
    }

    public function getUcPortHdmi(): ?int
    {
        return $this->uc_port_hdmi;
    }

    public function setUcPortHdmi(int $uc_port_hdmi): static
    {
        $this->uc_port_hdmi = $uc_port_hdmi;

        return $this;
    }

    public function getUcSysExpl(): ?string
    {
        return $this->uc_sys_expl;
    }

    public function setUcSysExpl(string $uc_sys_expl): static
    {
        $this->uc_sys_expl = $uc_sys_expl;

        return $this;
    }
}
