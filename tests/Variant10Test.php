<?php
namespace App\Tests;

use App\Variant10;
use PHPUnit\Framework\TestCase;

class Variant10Test extends TestCase
{
    public function testFirstCondition(): void
    {
        $calculator = new Variant10();
        $this->assertEquals(4, $calculator->calculate(2, 1));
    }

    public function testSecondCondition(): void
    {
        $calculator = new Variant10();
        $this->assertEquals(5, $calculator->calculate(1, -1));
    }

    public function testOtherwiseCondition(): void
    {
        $calculator = new Variant10();
        $this->assertEquals(-1, $calculator->calculate(-1, 0));
    }

    public function testDivisionByZeroThrowsException(): void
    {
        $calculator = new Variant10();
        $this->expectException(\InvalidArgumentException::class);
        $calculator->calculate(0, 3);
    }
}
