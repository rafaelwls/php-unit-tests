<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Funcoes;

final class FuncoesTest extends TestCase
{
    /* ---------- isEven ---------- */
    public function testIsEvenComNumeros(): void
    {
        $this->assertTrue(Funcoes::isEven(4));
        $this->assertFalse(Funcoes::isEven(5));
    }

    public function testIsEvenComTipoInvalidoDisparaTypeError(): void
    {
        $this->expectException(TypeError::class);
        /** @phpstan-ignore-next-line */
        Funcoes::isEven('10');          // string não‑numérica
    }

    /* ---------- factorial ---------- */
    public function testFactorialDeCinco(): void
    {
        $this->assertSame(120, Funcoes::factorial(5));
    }

    public function testFactorialNegativoDisparaExcecao(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    /* ---------- isPalindrome ---------- */
    public function testIsPalindromeComFrase(): void
    {
        $this->assertTrue(Funcoes::isPalindrome('A man, a plan, a canal, Panama'));
        $this->assertFalse(Funcoes::isPalindrome('ChatGPT'));
    }

    public function testIsPalindromeComStringVazia(): void
    {
        $this->assertTrue(Funcoes::isPalindrome(''));   // por definição, vazio é palíndromo
    }

    /* ---------- fahrenheitToCelsius ---------- */
    public function testFahrenheitToCelsiusPontosNotaveis(): void
    {
        // evita método obsoleto usando round + assertSame
        $this->assertSame(0.0, round(Funcoes::fahrenheitToCelsius(32), 4));
        $this->assertSame(100.0, round(Funcoes::fahrenheitToCelsius(212), 4));
    }

    public function testFahrenheitToCelsiusComTipoInvalido(): void
    {
        $this->expectException(TypeError::class);
        /** @phpstan-ignore-next-line */
        Funcoes::fahrenheitToCelsius('abc');
    }

    /* ---------- calculateDiscount ---------- */
    public function testCalculateDiscountValorValido(): void
    {
        $this->assertSame(90.0, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountValorNegativoDisparaExcecao(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-50, 10); 
    }
}
