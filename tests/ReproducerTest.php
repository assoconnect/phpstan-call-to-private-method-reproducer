<?php

namespace App\Tests;

use App\Repository\AbstractBankAccountRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ReproducerTest extends KernelTestCase
{
    public function testReproducer()
    {
        self::bootKernel();
        self::getContainer()->get(AbstractBankAccountRepository::class)->findOneByName('test');
    }
}
