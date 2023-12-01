<?php

namespace App\Entity;

use App\Repository\CurrencyHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Carbon\Carbon;

#[ORM\Entity(repositoryClass: CurrencyHistoryRepository::class)]
class CurrencyHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Currency $fromCurrency = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Currency $toCurrency = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'float')]
    private ?float $sell = null;

    #[ORM\Column(type: 'float')]
    private ?float $buy = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private \DateTimeInterface $createdAt;

    public function __construct (
        Currency $fromCurrency,
        Currency $toCurrency,
        Carbon $date, 
        ?float $sell,
        ?float $buy
    ) 
    {
        $this->fromCurrency = $fromCurrency;
        $this->toCurrency = $toCurrency;
        $this->date = $date;
        $this->sell = $sell;
        $this->buy = $buy;
        $this->createdAt = Carbon::now();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromCurrency(): ?Currency
    {
        return $this->fromCurrency;
    }

    public function setFromCurrency(?Currency $fromCurrency): static
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    public function getToCurrency(): ?Currency
    {
        return $this->toCurrency;
    }

    public function setToCurrency(?Currency $toCurrency): static
    {
        $this->toCurrency = $toCurrency;

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

    public function getSell(): ?float
    {
        return $this->sell;
    }

    public function setSell(float $sell): static
    {
        $this->sell = $sell;

        return $this;
    }

    public function getBuy(): ?float
    {
        return $this->buy;
    }

    public function setBuy(float $buy): static
    {
        $this->buy = $buy;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
