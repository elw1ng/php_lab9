<?php
namespace App;

class Variant10
{
    public function calculate(float $x, float $y): float
    {
        if ($x > 0 && $y > 0) {
            return 3 * $x * $y - $x;
        }

        if (7 * $x > 2 * $y || $y > 2) {
            if ($x == 0) {
                throw new \InvalidArgumentException('Ділити на нуль не можна.');
            }

            return (2 * $x - 3 * $y) / $x;
        }

        return $x - $y;
    }
}

