<?php

namespace App\Entity;

use App\Repository\MultiMediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MultiMediaRepository::class)]
class MultiMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $media_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $media_url = null;

    public function getMediaId(): ?int
    {
        return $this->media_id;
    }

    public function getMediaUrl(): ?string
    {
        return $this->media_url;
    }

    public function setMediaUrl(string $media_url): static
    {
        $this->media_url = $media_url;

        return $this;
    }
}
