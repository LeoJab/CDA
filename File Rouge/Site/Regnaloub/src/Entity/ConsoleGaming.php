<?php

namespace App\Entity;

use App\Repository\ConsoleGamingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'consoleGaming', targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setConsoleGaming($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getConsoleGaming() === $this) {
                $produit->setConsoleGaming(null);
            }
        }

        return $this;
    }
}
