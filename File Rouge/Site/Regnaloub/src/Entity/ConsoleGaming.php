<?php

namespace App\Entity;

use App\Repository\ConsoleGamingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsoleGamingRepository::class)]
class ConsoleGaming
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $port_usb = null;

    #[ORM\Column]
    private ?int $port_hdmi = null;

    #[ORM\Column]
    private ?int $disque_dur = null;

    #[ORM\Column(length: 50)]
    private ?string $resolution = null;

    #[ORM\Column]
    private ?int $fps = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDisqueDur(): ?int
    {
        return $this->disque_dur;
    }

    public function setDisqueDur(int $disque_dur): static
    {
        $this->disque_dur = $disque_dur;

        return $this;
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

    public function getFps(): ?int
    {
        return $this->fps;
    }

    public function setFps(int $fps): static
    {
        $this->fps = $fps;

        return $this;
    }
}
