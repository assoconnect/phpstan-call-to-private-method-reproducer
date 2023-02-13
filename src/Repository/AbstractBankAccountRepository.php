<?php

namespace App\Repository;

use App\Entity\AbstractBankAccount;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @template T of AbstractBankAccount
 * @extends AbstractRepository<T>
 */
class AbstractBankAccountRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass = AbstractBankAccount::class)
    {
        parent::__construct($registry, $entityClass);
    }
}
