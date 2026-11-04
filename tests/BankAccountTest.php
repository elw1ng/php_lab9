<?php
namespace App\Tests;

use App\BankAccount;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function testDefaultBalanceIsZero(): void
    {
        $account = new BankAccount();
        $this->assertEquals(0.0, $account->getBalance());
    }

    public function testInitialBalanceIsSetCorrectly(): void
    {
        $account = new BankAccount(100.0);
        $this->assertEquals(100.0, $account->getBalance());
    }

    public function testDepositIncreasesBalance(): void
    {
        $account = new BankAccount(50.0);
        $account->deposit(25.0);
        $this->assertEquals(75.0, $account->getBalance());
    }

    public function testWithdrawDecreasesBalance(): void
    {
        $account = new BankAccount(100.0);
        $account->withdraw(40.0);
        $this->assertEquals(60.0, $account->getBalance());
    }

    public function testConstructorRejectsNegativeBalance(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new BankAccount(-50.0);
    }

    public function testDepositRejectsZeroAmount(): void
    {
        $account = new BankAccount(50.0);
        $this->expectException(InvalidArgumentException::class);
        $account->deposit(0.0);
    }

    public function testWithdrawRejectsZeroAmount(): void
    {
        $account = new BankAccount(50.0);
        $this->expectException(InvalidArgumentException::class);
        $account->withdraw(0.0);
    }

    public function testWithdrawRejectsInsufficientFunds(): void
    {
        $account = new BankAccount(50.0);
        $this->expectException(InvalidArgumentException::class);
        $account->withdraw(100.0);
    }
}
