<?php
namespace App;

use InvalidArgumentException;

class BankAccount
{
    private float $balance;

    public function __construct(float $initialBalance = 0.0)
    {
        if ($initialBalance < 0) {
            throw new InvalidArgumentException('Початковий баланс не може бути від’ємним.');
        }

        $this->balance = $initialBalance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Сума поповнення має бути більшою за нуль.');
        }

        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Сума зняття має бути більшою за нуль.');
        }

        if ($amount > $this->balance) {
            throw new InvalidArgumentException('На рахунку недостатньо коштів.');
        }

        $this->balance -= $amount;
    }
}

