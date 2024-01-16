<?php

namespace App\Entity;

use App\Repository\ImprimanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImprimanteRepository::class)]
class Imprimante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column(length: 50)]
    private ?string $vit = null;

    #[ORM\Column(length: 50)]
    private ?string $qualiter = null;

    #[ORM\Column(length: 50)]
    private ?string $qualiter_photo = null;

    #[ORM\Column(length: 40)]
    private ?string $format = null;

    #[ORM\OneToMany(mappedBy: 'Imprimante', targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function geId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getVit(): ?string
    {
        return $this->vit;
    }

    public function setVit(string $vit): static
    {
        $this->vit = $vit;

        return $this;
    }

    public function getQualiter(): ?string
    {
        return $this->qualiter;
    }

    public function setQualiter(string $qualiter): static
    {
        $this->qualiter = $qualiter;

        return $this;
    }

    public function getQualiterPhoto(): ?string
    {
        return $this->qualiter_photo;
    }

    public function setQualiterPhoto(string $qualiter_photo): static
    {
        $this->qualiter_photo = $qualiter_photo;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): static
    {
        $this->format = $format;

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
            $produit->setImprimante($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getImprimante() === $this) {
                $produit->setImprimante(null);
            }
        }

        return $this;
    }
}
