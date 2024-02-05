<?php

namespace App\Entity;

use App\Repository\UniteCentralRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniteCentralRepository::class)]
class UniteCentral
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $lib_asso = null;

    #[ORM\Column(length: 50)]
    private ?string $proc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $proc_frequence = null;

    #[ORM\Column]
    private ?int $proc_nbr_coeur = null;

    #[ORM\Column]
    private ?int $ram = null;

    #[ORM\Column(length: 20)]
    private ?string $ram_type = null;

    #[ORM\Column(length: 50)]
    private ?string $cg_modele = null;

    #[ORM\Column]
    private ?int $stkage = null;

    #[ORM\Column(length: 20)]
    private ?string $type_stkage = null;

    #[ORM\Column(length: 10)]
    private ?string $wifi = null;

    #[ORM\Column]
    private ?int $port_usb = null;

    #[ORM\Column]
    private ?int $port_hdmi = null;

    #[ORM\Column(length: 20)]
    private ?string $sys_expl = null;

    #[ORM\OneToMany(mappedBy: 'UniteCentral', targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->lib_asso;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibAsso(): ?string
    {
        return $this->lib_asso;
    }

    public function setLibAsso(string $lib_asso): static
    {
        $this->lib_asso = $lib_asso;

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

    public function getProcFrequence(): ?string
    {
        return $this->proc_frequence;
    }

    public function setProcFrequence(string $proc_frequence): static
    {
        $this->proc_frequence = $proc_frequence;

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

    public function getRamType(): ?string
    {
        return $this->ram_type;
    }

    public function setRamType(string $ram_type): static
    {
        $this->ram_type = $ram_type;

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

    public function getSysExpl(): ?string
    {
        return $this->sys_expl;
    }

    public function setSysExpl(string $sys_expl): static
    {
        $this->sys_expl = $sys_expl;

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
            $produit->setUniteCentral($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getUniteCentral() === $this) {
                $produit->setUniteCentral(null);
            }
        }

        return $this;
    }
}
