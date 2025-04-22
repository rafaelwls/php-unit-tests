<?php
namespace App;

use InvalidArgumentException;

class Funcoes
{
    public static function isEven(int $n): bool
    {
        return $n % 2 === 0;
    }

    public static function factorial(int $n): int
    {
        if ($n < 0) throw new InvalidArgumentException();
        return $n === 0 ? 1 : $n * self::factorial($n - 1);
    }

    public static function isPalindrome(string $str): bool
    {
        $str = strtolower(preg_replace('/[^a-z0-9]/i', '', $str));
        return $str === strrev($str);
    }

    public static function fahrenheitToCelsius(float $f): float
    {
        return ($f - 32) * 5 / 9;
    }

    public static function calculateDiscount(float $p, float $pct): float
    {
        if ($p < 0 || $pct < 0) throw new InvalidArgumentException();
        return $p - ($p * $pct / 100);
    }
}
