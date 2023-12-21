<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $scate_lib = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $scate_desc = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $scate_photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScateLib(): ?string
    {
        return $this->scate_lib;
    }

    public function setScateLib(string $scate_lib): static
    {
        $this->scate_lib = $scate_lib;

        return $this;
    }

    public function getScateDesc(): ?string
    {
        return $this->scate_desc;
    }

    public function setScateDesc(?string $scate_desc): static
    {
        $this->scate_desc = $scate_desc;

        return $this;
    }

    public function getScatePhoto(): ?string
    {
        return $this->scate_photo;
    }

    public function setScatePhoto(?string $scate_photo): static
    {
        $this->scate_photo = $scate_photo;

        return $this;
    }
}
