<?php

namespace App\Entity;

use App\Repository\TelevisionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TelevisionRepository::class)]
class Television
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $prod_id = null;

    #[ORM\Column(length: 50)]
    private ?string $tv_resolution = null;

    #[ORM\Column(length: 10)]
    private ?string $tv_def = null;

    #[ORM\Column(length: 50)]
    private ?string $tv_techno = null;

    #[ORM\Column(length: 50)]
    private ?string $tv_proc = null;

    #[ORM\Column(length: 10)]
    private ?string $tv_son_puiss = null;

    #[ORM\Column]
    private ?int $tv_port_hdmi = null;

    #[ORM\Column]
    private ?int $tv_port_usb = null;

    public function getProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getTvResolution(): ?string
    {
        return $this->tv_resolution;
    }

    public function setTvResolution(string $tv_resolution): static
    {
        $this->tv_resolution = $tv_resolution;

        return $this;
    }

    public function getTvDef(): ?string
    {
        return $this->tv_def;
    }

    public function setTvDef(string $tv_def): static
    {
        $this->tv_def = $tv_def;

        return $this;
    }

    public function getTvTechno(): ?string
    {
        return $this->tv_techno;
    }

    public function setTvTechno(string $tv_techno): static
    {
        $this->tv_techno = $tv_techno;

        return $this;
    }

    public function getTvProc(): ?string
    {
        return $this->tv_proc;
    }

    public function setTvProc(string $tv_proc): static
    {
        $this->tv_proc = $tv_proc;

        return $this;
    }

    public function getTvSonPuiss(): ?string
    {
        return $this->tv_son_puiss;
    }

    public function setTvSonPuiss(string $tv_son_puiss): static
    {
        $this->tv_son_puiss = $tv_son_puiss;

        return $this;
    }

    public function getTvPortHdmi(): ?int
    {
        return $this->tv_port_hdmi;
    }

    public function setTvPortHdmi(int $tv_port_hdmi): static
    {
        $this->tv_port_hdmi = $tv_port_hdmi;

        return $this;
    }

    public function getTvPortUsb(): ?int
    {
        return $this->tv_port_usb;
    }

    public function setTvPortUsb(int $tv_port_usb): static
    {
        $this->tv_port_usb = $tv_port_usb;

        return $this;
    }
}
