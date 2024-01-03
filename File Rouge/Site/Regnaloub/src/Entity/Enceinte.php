<?php

namespace App\Entity;

use App\Repository\EnceinteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnceinteRepository::class)]
class Enceinte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $prod_id = null;

    #[ORM\Column]
    private ?int $enc_puissance = null;

    #[ORM\Column(length: 20)]
    private ?string $enc_alimentation = null;

    #[ORM\Column(length: 10)]
    private ?string $enc_wifi = null;

    #[ORM\Column(length: 10)]
    private ?string $enc_bluetooth = null;

    public function getProdId(): ?int
    {
        return $this->prod_id;
    }

    public function getEncPuissance(): ?int
    {
        return $this->enc_puissance;
    }

    public function setEncPuissance(int $enc_puissance): static
    {
        $this->enc_puissance = $enc_puissance;

        return $this;
    }

    public function getEncAlimentation(): ?string
    {
        return $this->enc_alimentation;
    }

    public function setEncAlimentation(string $enc_alimentation): static
    {
        $this->enc_alimentation = $enc_alimentation;

        return $this;
    }

    public function getEncWifi(): ?string
    {
        return $this->enc_wifi;
    }

    public function setEncWifi(string $enc_wifi): static
    {
        $this->enc_wifi = $enc_wifi;

        return $this;
    }

    public function getEncBluetooth(): ?string
    {
        return $this->enc_bluetooth;
    }

    public function setEncBluetooth(string $enc_bluetooth): static
    {
        $this->enc_bluetooth = $enc_bluetooth;

        return $this;
    }
}
