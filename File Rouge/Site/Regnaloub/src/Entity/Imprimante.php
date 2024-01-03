<?php

namespace App\Entity;

use App\Repository\ImprimanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImprimanteRepository::class)]
class Imprimante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $prod_id = null;

    #[ORM\Column(length: 50)]
    private ?string $imp_type = null;

    #[ORM\Column(length: 50)]
    private ?string $imp_vit = null;

    #[ORM\Column(length: 50)]
    private ?string $imp_qualiter = null;

    #[ORM\Column(length: 50)]
    private ?string $imp_qualiter_photo = null;

    #[ORM\Column(length: 40)]
    private ?string $imp_format = null;

    public function geProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getImpType(): ?string
    {
        return $this->imp_type;
    }

    public function setImpType(string $imp_type): static
    {
        $this->imp_type = $imp_type;

        return $this;
    }

    public function getImpVit(): ?string
    {
        return $this->imp_vit;
    }

    public function setImpVit(string $imp_vit): static
    {
        $this->imp_vit = $imp_vit;

        return $this;
    }

    public function getImpQualiter(): ?string
    {
        return $this->imp_qualiter;
    }

    public function setImpQualiter(string $imp_qualiter): static
    {
        $this->imp_qualiter = $imp_qualiter;

        return $this;
    }

    public function getImpQualiterPhoto(): ?string
    {
        return $this->imp_qualiter_photo;
    }

    public function setImpQualiterPhoto(string $imp_qualiter_photo): static
    {
        $this->imp_qualiter_photo = $imp_qualiter_photo;

        return $this;
    }

    public function getImpFormat(): ?string
    {
        return $this->imp_format;
    }

    public function setImpFormat(string $imp_format): static
    {
        $this->imp_format = $imp_format;

        return $this;
    }
}
