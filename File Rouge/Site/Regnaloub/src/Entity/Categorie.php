<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $cate_id = null;

    #[ORM\Column(length: 60)]
    private ?string $cate_lib = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cate_desc = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cate_photo = null;

    public function getCateId(): ?int
    {
        return $this->cate_id;
    }

    public function getCateLib(): ?string
    {
        return $this->cate_lib;
    }

    public function setCateLib(string $cate_lib): static
    {
        $this->cate_lib = $cate_lib;

        return $this;
    }

    public function getCateDesc(): ?string
    {
        return $this->cate_desc;
    }

    public function setCateDesc(?string $cate_desc): static
    {
        $this->cate_desc = $cate_desc;

        return $this;
    }

    public function getCatePhoto(): ?string
    {
        return $this->cate_photo;
    }

    public function setCatePhoto(?string $cate_photo): static
    {
        $this->cate_photo = $cate_photo;

        return $this;
    }
}
