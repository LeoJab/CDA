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
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $resolution = null;

    #[ORM\Column(length: 10)]
    private ?string $def = null;

    #[ORM\Column(length: 50)]
    private ?string $techno = null;

    #[ORM\Column(length: 50)]
    private ?string $proc = null;

    #[ORM\Column(length: 10)]
    private ?string $son_puiss = null;

    #[ORM\Column]
    private ?int $port_hdmi = null;

    #[ORM\Column]
    private ?int $port_usb = null;

    public function getId(): ?int
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

    public function getDef(): ?string
    {
        return $this->def;
    }

    public function setDef(string $def): static
    {
        $this->def = $def;

        return $this;
    }

    public function getTechno(): ?string
    {
        return $this->techno;
    }

    public function setTechno(string $techno): static
    {
        $this->techno = $techno;

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

    public function getSonPuiss(): ?string
    {
        return $this->son_puiss;
    }

    public function setSonPuiss(string $son_puiss): static
    {
        $this->son_puiss = $son_puiss;

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

    public function getPortUsb(): ?int
    {
        return $this->port_usb;
    }

    public function setPortUsb(int $port_usb): static
    {
        $this->port_usb = $port_usb;

        return $this;
    }
}
