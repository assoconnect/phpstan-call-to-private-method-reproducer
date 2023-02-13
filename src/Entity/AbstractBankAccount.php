<?php

namespace App\Entity;

use App\Repository\AbstractBankAccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbstractBankAccountRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'account_type', type: 'string')]
#[ORM\DiscriminatorMap([
    self::ACCOUNT_TYPE_EUROPEAN => 'EuropeanBankAccount',
    self::ACCOUNT_TYPE_US => 'UsBankAccount',
])]
class AbstractBankAccount
{
    public const ACCOUNT_TYPE_EUROPEAN = 'EUROPEAN';
    public const ACCOUNT_TYPE_US = 'US';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
