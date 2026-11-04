<?php
namespace App\Tests;

use App\DiscountCalculator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    private DiscountCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new DiscountCalculator();
    }

    public function testVipGetsTwentyPercentDiscount(): void
    {
        $discount = $this->calculator->calculateDiscount(1000, 'VIP');
        $this->assertEquals(200, $discount);
    }

    public function testRegularUserGetsTenPercentDiscountAboveOneThousand(): void
    {
        $discount = $this->calculator->calculateDiscount(2000, 'REGULAR');
        $this->assertEquals(200, $discount);
    }

    public function testRegularUserGetsNoDiscountAtOneThousand(): void
    {
        $discount = $this->calculator->calculateDiscount(1000, 'REGULAR');
        $this->assertEquals(0, $discount);
    }

    public function testOtherUserTypeGetsNoDiscount(): void
    {
        $discount = $this->calculator->calculateDiscount(500, 'GUEST');
        $this->assertEquals(0, $discount);
    }

    public function testNonPositiveAmountThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->calculateDiscount(0, 'VIP');
    }
}

