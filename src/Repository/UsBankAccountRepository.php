<?php

namespace App\Repository;

use App\Entity\UsBankAccount;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends AbstractBankAccountRepository<UsBankAccount>
 */
class UsBankAccountRepository extends AbstractBankAccountRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsBankAccount::class);
    }
}
