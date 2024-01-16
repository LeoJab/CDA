<?php

namespace App\Entity;

use App\Repository\EnceinteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnceinteRepository::class)]
class Enceinte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $puissance = null;

    #[ORM\Column(length: 20)]
    private ?string $alimentation = null;

    #[ORM\Column(length: 10)]
    private ?string $wifi = null;

    #[ORM\Column(length: 10)]
    private ?string $bluetooth = null;

    #[ORM\OneToMany(mappedBy: 'Enceinte', targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(int $puissance): static
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getAlimentation(): ?string
    {
        return $this->alimentation;
    }

    public function setAlimentation(string $alimentation): static
    {
        $this->alimentation = $alimentation;

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
            $produit->setEnceinte($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getEnceinte() === $this) {
                $produit->setEnceinte(null);
            }
        }

        return $this;
    }
}
