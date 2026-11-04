<?php
class CalculatorExample
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
}

class SimpleUnitTest
{
    private int $passed = 0;
    private int $failed = 0;

    public function assertEquals($expected, $actual, string $testName): void
    {
        if ($expected === $actual) {
            echo "PASSED: $testName<br>";
            $this->passed++;
        } else {
            echo "FAILED: $testName. Очікувалось: $expected, отримано: $actual<br>";
            $this->failed++;
        }
    }

    public function printSummary(): void
    {
        echo '<hr>';
        echo 'Пройдено: ' . $this->passed . '<br>';
        echo 'Провалено: ' . $this->failed . '<br>';
    }
}

$test = new SimpleUnitTest();
$calculator = new CalculatorExample();

$test->assertEquals(5, $calculator->add(2, 3), 'Додавання');
$test->assertEquals(12, $calculator->multiply(3, 4), 'Множення');
$test->printSummary();
?>

