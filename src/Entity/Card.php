<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CardRepository::class)]
#[ORM\Table(name: 'cards')]
#[ORM\Index(name: 'idx_cards_user_id', columns: ['user_id'])]
#[ORM\HasLifecycleCallbacks]
class Card
{
    public const BRAND_VISA = 'visa';
    public const BRAND_MASTERCARD = 'mastercard';
    public const BRAND_AMEX = 'amex';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le nom du titulaire est requis')]
    private string $cardHolderName;

    #[ORM\Column(type: 'string', length: 4)]
    #[Assert\NotBlank(message: 'Les 4 derniers chiffres sont requis')]
    #[Assert\Length(exactly: 4, exactMessage: 'Il doit y avoir exactement 4 chiffres')]
    private string $last4Digits;

    #[ORM\Column(type: 'string', length: 7)]
    #[Assert\NotBlank(message: 'La date d\'expiration est requise')]
    #[Assert\Regex(pattern: '/^(0[1-9]|1[0-2])\/\d{2,4}$/', message: 'Format de date invalide (MM/YY ou MM/YYYY)')]
    private string $expiryDate;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: 'La marque de la carte est requise')]
    private string $cardBrand;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'cards')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardHolderName(): string
    {
        return $this->cardHolderName;
    }

    public function setCardHolderName(string $cardHolderName): self
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    public function getLast4Digits(): string
    {
        return $this->last4Digits;
    }

    public function setLast4Digits(string $last4Digits): self
    {
        $this->last4Digits = $last4Digits;
        return $this;
    }

    public function getExpiryDate(): string
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function getCardBrand(): string
    {
        return $this->cardBrand;
    }

    public function setCardBrand(string $cardBrand): self
    {
        $this->cardBrand = $cardBrand;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Convertit en tableau JSON
     */
    public function toJSON(): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user?->getId(),
            'card_holder_name' => $this->cardHolderName,
            'last_4_digits' => $this->last4Digits,
            'expiry_date' => $this->expiryDate,
            'card_brand' => $this->cardBrand,
            'created_at' => $this->createdAt?->format('Y-m-d H:i:s')
        ];
    }
}
