<?php

namespace App\Entity;

use App\Repository\EuropeanBankAccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EuropeanBankAccountRepository::class)]
class EuropeanBankAccount extends AbstractBankAccount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
