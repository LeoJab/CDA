<?php

namespace App\Entity;

use App\Repository\OrdinateurPortableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdinateurPortableRepository::class)]
class OrdinateurPortable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $prod_id = null;

    #[ORM\Column(length: 50)]
    private ?string $op_resolution = null;

    #[ORM\Column(length: 10)]
    private ?string $op_webcam = null;

    #[ORM\Column(length: 60)]
    private ?string $op_proc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $op_proc_freq = null;

    #[ORM\Column]
    private ?int $op_proc_nbr_coeur = null;

    #[ORM\Column]
    private ?int $op_ram = null;

    #[ORM\Column(length: 50)]
    private ?string $op_ram_freq = null;

    #[ORM\Column(length: 50)]
    private ?string $op_cg_modele = null;

    #[ORM\Column]
    private ?int $op_stkage = null;

    #[ORM\Column(length: 20)]
    private ?string $op_type_stkage = null;

    #[ORM\Column(length: 10)]
    private ?string $op_wifi = null;

    #[ORM\Column(length: 10)]
    private ?string $op_bluetooth = null;

    #[ORM\Column]
    private ?int $op_port_usb = null;

    #[ORM\Column]
    private ?int $op_port_hdmi = null;

    #[ORM\Column(length: 20)]
    private ?string $op_sys_exp = null;

    public function getProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getOpResolution(): ?string
    {
        return $this->op_resolution;
    }

    public function setOpResolution(string $op_resolution): static
    {
        $this->op_resolution = $op_resolution;

        return $this;
    }

    public function getOpWebcam(): ?string
    {
        return $this->op_webcam;
    }

    public function setOpWebcam(string $op_webcam): static
    {
        $this->op_webcam = $op_webcam;

        return $this;
    }

    public function getOpProc(): ?string
    {
        return $this->op_proc;
    }

    public function setOpProc(string $op_proc): static
    {
        $this->op_proc = $op_proc;

        return $this;
    }

    public function getOpProcFreq(): ?string
    {
        return $this->op_proc_freq;
    }

    public function setOpProcFreq(string $op_proc_freq): static
    {
        $this->op_proc_freq = $op_proc_freq;

        return $this;
    }

    public function getOpProcNbrCoeur(): ?int
    {
        return $this->op_proc_nbr_coeur;
    }

    public function setOpProcNbrCoeur(int $op_proc_nbr_coeur): static
    {
        $this->op_proc_nbr_coeur = $op_proc_nbr_coeur;

        return $this;
    }

    public function getOpRam(): ?int
    {
        return $this->op_ram;
    }

    public function setOpRam(int $op_ram): static
    {
        $this->op_ram = $op_ram;

        return $this;
    }

    public function getOpRamFreq(): ?string
    {
        return $this->op_ram_freq;
    }

    public function setOpRamFreq(string $op_ram_freq): static
    {
        $this->op_ram_freq = $op_ram_freq;

        return $this;
    }

    public function getOpCgModele(): ?string
    {
        return $this->op_cg_modele;
    }

    public function setOpCgModele(string $op_cg_modele): static
    {
        $this->op_cg_modele = $op_cg_modele;

        return $this;
    }

    public function getOpStkage(): ?int
    {
        return $this->op_stkage;
    }

    public function setOpStkage(int $op_stkage): static
    {
        $this->op_stkage = $op_stkage;

        return $this;
    }

    public function getOpTypeStkage(): ?string
    {
        return $this->op_type_stkage;
    }

    public function setOpTypeStkage(string $op_type_stkage): static
    {
        $this->op_type_stkage = $op_type_stkage;

        return $this;
    }

    public function getOpWifi(): ?string
    {
        return $this->op_wifi;
    }

    public function setOpWifi(string $op_wifi): static
    {
        $this->op_wifi = $op_wifi;

        return $this;
    }

    public function getOpBluetooth(): ?string
    {
        return $this->op_bluetooth;
    }

    public function setOpBluetooth(string $op_bluetooth): static
    {
        $this->op_bluetooth = $op_bluetooth;

        return $this;
    }

    public function getOpPortUsb(): ?int
    {
        return $this->op_port_usb;
    }

    public function setOpPortUsb(int $op_port_usb): static
    {
        $this->op_port_usb = $op_port_usb;

        return $this;
    }

    public function getOpPortHdmi(): ?int
    {
        return $this->op_port_hdmi;
    }

    public function setOpPortHdmi(int $op_port_hdmi): static
    {
        $this->op_port_hdmi = $op_port_hdmi;

        return $this;
    }

    public function getOpSysExp(): ?string
    {
        return $this->op_sys_exp;
    }

    public function setOpSysExp(string $op_sys_exp): static
    {
        $this->op_sys_exp = $op_sys_exp;

        return $this;
    }
}
