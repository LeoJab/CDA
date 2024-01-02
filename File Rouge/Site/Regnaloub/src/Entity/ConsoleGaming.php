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
    private ?int $cons_port_usb = null;

    #[ORM\Column]
    private ?int $cons_port_hdmi = null;

    #[ORM\Column]
    private ?int $cons_disque_dur = null;

    #[ORM\Column(length: 50)]
    private ?string $cons_resolution = null;

    #[ORM\Column]
    private ?int $cons_fps = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConsPortUsb(): ?int
    {
        return $this->cons_port_usb;
    }

    public function setConsPortUsb(int $cons_port_usb): static
    {
        $this->cons_port_usb = $cons_port_usb;

        return $this;
    }

    public function getConsPortHdmi(): ?int
    {
        return $this->cons_port_hdmi;
    }

    public function setConsPortHdmi(int $cons_port_hdmi): static
    {
        $this->cons_port_hdmi = $cons_port_hdmi;

        return $this;
    }

    public function getConsDisqueDur(): ?int
    {
        return $this->cons_disque_dur;
    }

    public function setConsDisqueDur(int $cons_disque_dur): static
    {
        $this->cons_disque_dur = $cons_disque_dur;

        return $this;
    }

    public function getConsResolution(): ?string
    {
        return $this->cons_resolution;
    }

    public function setConsResolution(string $cons_resolution): static
    {
        $this->cons_resolution = $cons_resolution;

        return $this;
    }

    public function getConsFps(): ?int
    {
        return $this->cons_fps;
    }

    public function setConsFps(int $cons_fps): static
    {
        $this->cons_fps = $cons_fps;

        return $this;
    }
}
