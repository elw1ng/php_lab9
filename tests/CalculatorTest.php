<?php
namespace App\Tests;

use App\Calculator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddNumbers(): void
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtractNumbers(): void
    {
        $result = $this->calculator->subtract(8, 3);
        $this->assertEquals(5, $result);
    }

    public function testMultiplyNumbers(): void
    {
        $result = $this->calculator->multiply(3, 4);
        $this->assertEquals(12, $result);
    }

    public function testDivideNumbers(): void
    {
        $result = $this->calculator->divide(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divide(10, 0);
    }
}

