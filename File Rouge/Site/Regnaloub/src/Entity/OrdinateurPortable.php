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
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $resolution = null;

    #[ORM\Column(length: 10)]
    private ?string $webcam = null;

    #[ORM\Column(length: 60)]
    private ?string $proc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $proc_freq = null;

    #[ORM\Column]
    private ?int $proc_nbr_coeur = null;

    #[ORM\Column]
    private ?int $ram = null;

    #[ORM\Column(length: 50)]
    private ?string $ram_freq = null;

    #[ORM\Column(length: 50)]
    private ?string $cg_modele = null;

    #[ORM\Column]
    private ?int $stkage = null;

    #[ORM\Column(length: 20)]
    private ?string $type_stkage = null;

    #[ORM\Column(length: 10)]
    private ?string $wifi = null;

    #[ORM\Column(length: 10)]
    private ?string $bluetooth = null;

    #[ORM\Column]
    private ?int $port_usb = null;

    #[ORM\Column]
    private ?int $port_hdmi = null;

    #[ORM\Column(length: 20)]
    private ?string $sys_exp = null;

    public function getProdId(): ?int
    {
        return $this->id;
    }

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(string $resolution): static
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getWebcam(): ?string
    {
        return $this->webcam;
    }

    public function setWebcam(string $webcam): static
    {
        $this->webcam = $webcam;

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

    public function getProcFreq(): ?string
    {
        return $this->proc_freq;
    }

    public function setProcFreq(string $proc_freq): static
    {
        $this->proc_freq = $proc_freq;

        return $this;
    }

    public function getProcNbrCoeur(): ?int
    {
        return $this->proc_nbr_coeur;
    }

    public function setProcNbrCoeur(int $proc_nbr_coeur): static
    {
        $this->proc_nbr_coeur = $proc_nbr_coeur;

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

    public function getRamFreq(): ?string
    {
        return $this->ram_freq;
    }

    public function setRamFreq(string $ram_freq): static
    {
        $this->ram_freq = $ram_freq;

        return $this;
    }

    public function getCgModele(): ?string
    {
        return $this->cg_modele;
    }

    public function setCgModele(string $cg_modele): static
    {
        $this->cg_modele = $cg_modele;

        return $this;
    }

    public function getStkage(): ?int
    {
        return $this->stkage;
    }

    public function setStkage(int $stkage): static
    {
        $this->stkage = $stkage;

        return $this;
    }

    public function getTypeStkage(): ?string
    {
        return $this->type_stkage;
    }

    public function setTypeStkage(string $type_stkage): static
    {
        $this->type_stkage = $type_stkage;

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

    public function getBluetooth(): ?string
    {
        return $this->bluetooth;
    }

    public function setBluetooth(string $bluetooth): static
    {
        $this->bluetooth = $bluetooth;

        return $this;
    }

    public function getPortUsb(): ?int
    {
        return $this->port_usb;
    }

    public function setPortUsb(int $port_usb): static
    {
        $this->port_usb = $port_usb;

        return $this;
    }

    public function getPortHdmi(): ?int
    {
        return $this->port_hdmi;
    }

    public function setPortHdmi(int $port_hdmi): static
    {
        $this->port_hdmi = $port_hdmi;

        return $this;
    }

    public function getSysExp(): ?string
    {
        return $this->sys_exp;
    }

    public function setSysExp(string $sys_exp): static
    {
        $this->sys_exp = $sys_exp;

        return $this;
    }
}
