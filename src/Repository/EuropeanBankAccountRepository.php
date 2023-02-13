<?php

namespace App\Repository;

use App\Entity\EuropeanBankAccount;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends AbstractBankAccountRepository<EuropeanBankAccount>
 */
class EuropeanBankAccountRepository extends AbstractBankAccountRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EuropeanBankAccount::class);
    }
}
