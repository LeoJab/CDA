<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tot_ttc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tot_prix_ht = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 100)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $tva = null;

    #[ORM\OneToMany(mappedBy: 'facture', targetEntity: Contient::class, orphanRemoval: true)]
    private Collection $facture;

    #[ORM\ManyToOne(inversedBy: 'factures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $commande = null;

    public function __construct()
    {
        $this->facture = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotTtc(): ?string
    {
        return $this->tot_ttc;
    }

    public function setTotTtc(string $tot_ttc): static
    {
        $this->tot_ttc = $tot_ttc;

        return $this;
    }

    public function getTotPrixHt(): ?string
    {
        return $this->tot_prix_ht;
    }

    public function setTotPrixHt(string $tot_prix_ht): static
    {
        $this->tot_prix_ht = $tot_prix_ht;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(string $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getFacture(): Collection
    {
        return $this->facture;
    }

    public function addFacture(Contient $facture): static
    {
        if (!$this->facture->contains($facture)) {
            $this->facture->add($facture);
            $facture->setFacture($this);
        }

        return $this;
    }

    public function removeFacture(Contient $facture): static
    {
        if ($this->facture->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getFacture() === $this) {
                $facture->setFacture(null);
            }
        }

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }
}
