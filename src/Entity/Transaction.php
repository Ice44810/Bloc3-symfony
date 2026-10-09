<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Category;
use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Table(name: 'transactions')]
#[ORM\Index(name: 'idx_transactions_user_id', columns: ['user_id'])]
#[ORM\Index(name: 'idx_transactions_created_at', columns: ['created_at'])]
#[ORM\Index(name: 'idx_transactions_type', columns: ['type'])]
#[ORM\Index(name: 'idx_transactions_category_id', columns: ['category_id'])]
#[ORM\HasLifecycleCallbacks]
class Transaction
{
    public const TYPE_INCOME = 'income';
    public const TYPE_EXPENSE = 'expense';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'L\'utilisateur est requis')]
    private ?User $user = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le titre est requis')]
    private string $title;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\Positive(message: 'Le montant doit être positif')]
    private string $amount = '0.00';

    #[ORM\Column(type: 'string', length: 10)]
    #[Assert\Choice(choices: [self::TYPE_INCOME, self::TYPE_EXPENSE], message: 'Le type doit être "income" ou "expense"')]
    private string $type = self::TYPE_EXPENSE;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'transactions')]
    #[ORM\JoinColumn(name: 'category_id', referencedColumnName: 'id', nullable: true)]
    private ?Category $category = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getAmount(): float
    {
        return (float) $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = number_format($amount, 2, '.', '');
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

    public function getCategoryId(): ?int
    {
        return $this->category?->getId();
    }

    public function setCategoryId(?int $categoryId): self
    {
        if ($categoryId === null) {
            $this->category = null;
        }
        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;
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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    #[ORM\PreUpdate]
    public function preUpdate(): void
    {
        $this->updatedAt = new \DateTime();
    }

    // ============ Méthodes utilitaires ============

    public function isIncome(): bool
    {
        return $this->type === self::TYPE_INCOME;
    }

    public function isExpense(): bool
    {
        return $this->type === self::TYPE_EXPENSE;
    }

    public function getSignedAmount(): float
    {
        $amount = $this->getAmount();
        return $this->isIncome() ? $amount : -$amount;
    }

    public function getFormattedAmount(): string
    {
        $sign = $this->isIncome() ? '+' : '-';
        return sprintf('%s%.2f €', $sign, $this->getAmount());
    }

    /**
     * Convertit en tableau JSON
     */
    public function toJSON(): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user?->getId(),
            'title' => $this->title,
            'amount' => (float) $this->amount,
            'type' => $this->type,
            'category_id' => $this->category?->getId(),
            'category_name' => $this->category?->getName(),
            'created_at' => $this->createdAt?->format('Y-m-d H:i:s')
        ];
    }
}
