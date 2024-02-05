<?php

namespace App\Entity;

use App\Repository\OrdinateurPortableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private ?string $lib_asso = null;

    #[ORM\Column(length: 50)]
    private ?string $resolution = null;

    #[ORM\Column(length: 10)]
    private ?string $webcam = null;

    #[ORM\Column(length: 60)]
    private ?string $proc = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $procFreq = null;

    #[ORM\Column]
    private ?int $procNbrCoeur = null;

    #[ORM\Column]
    private ?int $ram = null;

    #[ORM\Column(length: 50)]
    private ?string $ramFreq = null;

    #[ORM\Column(length: 50)]
    private ?string $cgModele = null;

    #[ORM\Column]
    private ?int $stkage = null;

    #[ORM\Column(length: 20)]
    private ?string $typeStkage = null;

    #[ORM\Column(length: 10)]
    private ?string $wifi = null;

    #[ORM\Column(length: 10)]
    private ?string $bluetooth = null;

    #[ORM\Column]
    private ?int $portUsb = null;

    #[ORM\Column]
    private ?int $portHdmi = null;

    #[ORM\Column(length: 20)]
    private ?string $sysExp = null;

    #[ORM\OneToMany(mappedBy: 'OrdinateurPortable', targetEntity: Produit::class)]
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
        return $this->procFreq;
    }

    public function setProcFreq(string $procFreq): static
    {
        $this->procFreq = $procFreq;

        return $this;
    }

    public function getProcNbrCoeur(): ?int
    {
        return $this->procNbrCoeur;
    }

    public function setProcNbrCoeur(int $procNbrCoeur): static
    {
        $this->procNbrCoeur = $procNbrCoeur;

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
        return $this->ramFreq;
    }

    public function setRamFreq(string $ramFreq): static
    {
        $this->ramFreq = $ramFreq;

        return $this;
    }

    public function getCgModele(): ?string
    {
        return $this->cgModele;
    }

    public function setCgModele(string $cgModele): static
    {
        $this->cgModele = $cgModele;

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
        return $this->typeStkage;
    }

    public function setTypeStkage(string $typeStkage): static
    {
        $this->typeStkage = $typeStkage;

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
        return $this->portUsb;
    }

    public function setPortUsb(int $portUsb): static
    {
        $this->portUsb = $portUsb;

        return $this;
    }

    public function getPortHdmi(): ?int
    {
        return $this->portHdmi;
    }

    public function setPortHdmi(int $portHdmi): static
    {
        $this->portHdmi = $portHdmi;

        return $this;
    }

    public function getSysExp(): ?string
    {
        return $this->sysExp;
    }

    public function setSysExp(string $sysExp): static
    {
        $this->sysExp = $sysExp;

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
            $produit->setOrdinateurPortable($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getOrdinateurPortable() === $this) {
                $produit->setOrdinateurPortable(null);
            }
        }

        return $this;
    }
}
