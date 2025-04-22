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
}
