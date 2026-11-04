<?php
namespace App;

use InvalidArgumentException;

class DiscountCalculator
{
    public function calculateDiscount(float $totalAmount, string $userType): float
    {
        if ($totalAmount <= 0) {
            throw new InvalidArgumentException('Сума покупки має бути більшою за нуль.');
        }

        if ($userType === 'VIP') {
            return $totalAmount * 0.20;
        }

        if ($userType === 'REGULAR' && $totalAmount > 1000) {
            return $totalAmount * 0.10;
        }

        return 0.0;
    }
}
