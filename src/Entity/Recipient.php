<?php

namespace App\Entity;

use App\Repository\RecipientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RecipientRepository::class)]
#[ORM\Table(name: 'recipients')]
#[ORM\Index(name: 'idx_recipients_user_id', columns: ['user_id'])]
#[ORM\Index(name: 'idx_recipients_identifier', columns: ['identifier'])]
#[ORM\HasLifecycleCallbacks]
class Recipient
{
    public const TYPE_PHONE = 'phone';
    public const TYPE_BANK = 'bank';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'L\'utilisateur est requis')]
    private ?User $user = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le nom du bénéficiaire est requis')]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'L\'identifiant est requis')]
    private string $identifier;

    #[ORM\Column(type: 'string', length: 10)]
    #[Assert\Choice(choices: [self::TYPE_PHONE, self::TYPE_BANK], message: 'Le type doit être "phone" ou "bank"')]
    private string $type = self::TYPE_PHONE;

    // Propriété non mappée pour éviter l'erreur SQL en attendant la migration
    private ?string $email = null;

    // Propriété non mappée pour éviter l'erreur SQL en attendant la migration
    private ?string $bankName = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $avatar = null;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;
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
            'name' => $this->name,
            'identifier' => $this->identifier,
            'type' => $this->type,
            'email' => $this->email,
            'bank_name' => $this->bankName,
            'avatar' => $this->avatar,
            'created_at' => $this->createdAt?->format('Y-m-d H:i:s')
        ];
    }
}
