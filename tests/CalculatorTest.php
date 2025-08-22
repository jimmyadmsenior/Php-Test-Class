<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

/**
 * Testes unitários para a classe Calculator
 */
class CalculatorTest extends TestCase
{
    // Testes para somar
    public function testSomarPositivos()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->somar(2, 3)); // Soma de positivos
    }
    public function testSomarNegativos()
    {
        $calc = new Calculator();
        $this->assertEquals(-5, $calc->somar(-2, -3)); // Soma de negativos
    }
    public function testSomarComZero()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->somar(2, 0)); // Soma com zero
    }

    // Testes para subtrair
    public function testSubtrairSimples()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->subtrair(5, 3)); // Subtração simples
    }
    public function testSubtrairNegativo()
    {
        $calc = new Calculator();
        $this->assertEquals(-1, $calc->subtrair(2, 3)); // Subtração que gera negativo
    }

    // Testes para multiplicar
    public function testMultiplicarPositivos()
    {
        $calc = new Calculator();
        $this->assertEquals(6, $calc->multiplicar(2, 3)); // Multiplicação de positivos
    }
    public function testMultiplicarComZero()
    {
        $calc = new Calculator();
        $this->assertEquals(0, $calc->multiplicar(2, 0)); // Multiplicação com zero
    }
    public function testMultiplicarNegativo()
    {
        $calc = new Calculator();
        $this->assertEquals(-6, $calc->multiplicar(2, -3)); // Multiplicação com negativo
    }

    // Testes para dividir
    public function testDividirExata()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->dividir(6, 3)); // Divisão exata
    }
    public function testDividirDecimal()
    {
        $calc = new Calculator();
        $this->assertEquals(2.5, $calc->dividir(5, 2)); // Divisão decimal
    }
    public function testDividirPorZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->dividir(5, 0); // Deve lançar exceção
    }

    // Testes para potencia
    public function testPotenciaPositivo()
    {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->potencia(2, 3)); // Expoente positivo
    }
    public function testPotenciaZero()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->potencia(5, 0)); // Expoente zero
    }
    public function testPotenciaNegativo()
    {
        $calc = new Calculator();
        $this->assertEquals(0.25, $calc->potencia(2, -2)); // Expoente negativo
    }

    // Testes para raizQuadrada
    public function testRaizQuadradaPositivo()
    {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->raizQuadrada(9)); // Raiz de positivo
    }
    public function testRaizQuadradaZero()
    {
        $calc = new Calculator();
        $this->assertEquals(0, $calc->raizQuadrada(0)); // Raiz de zero
    }
    public function testRaizQuadradaNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->raizQuadrada(-4); // Deve lançar exceção
    }

    // Testes para fatorial
    public function testFatorialZero()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->fatorial(0)); // 0!
    }
    public function testFatorialUm()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->fatorial(1)); // 1!
    }
    public function testFatorialMaior()
    {
        $calc = new Calculator();
        $this->assertEquals(24, $calc->fatorial(4)); // 4!
    }
    public function testFatorialNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->fatorial(-2); // Deve lançar exceção
    }

    // Testes para ehPar
    public function testEhParPositivo()
    {
        $calc = new Calculator();
        $this->assertTrue($calc->ehPar(4)); // Par positivo
    }
    public function testEhParImpar()
    {
        $calc = new Calculator();
        $this->assertFalse($calc->ehPar(3)); // Ímpar positivo
    }
    public function testEhParZero()
    {
        $calc = new Calculator();
        $this->assertTrue($calc->ehPar(0)); // Zero é par
    }
    public function testEhParNegativo()
    {
        $calc = new Calculator();
        $this->assertTrue($calc->ehPar(-2)); // Par negativo
        $this->assertFalse($calc->ehPar(-3)); // Ímpar negativo
    }

    // Testes para media
    public function testMediaVariosNumeros()
    {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->media([1,2,3,4,5])); // Média de vários
    }
    public function testMediaUnicoNumero()
    {
        $calc = new Calculator();
        $this->assertEquals(10, $calc->media([10])); // Média de um só
    }
    public function testMediaArrayVazio()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->media([]); // Deve lançar exceção
    }

    // Testes para maiorNumero
    public function testMaiorNumeroPositivos()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->maiorNumero([1,2,3,4,5])); // Array positivos
    }
    public function testMaiorNumeroNegativos()
    {
        $calc = new Calculator();
        $this->assertEquals(-1, $calc->maiorNumero([-5,-4,-3,-2,-1])); // Array negativos
    }
    public function testMaiorNumeroMisto()
    {
        $calc = new Calculator();
        $this->assertEquals(10, $calc->maiorNumero([-10, 0, 10, 5])); // Array misto
    }
    public function testMaiorNumeroArrayVazio()
    {
        $this->expectException(InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->maiorNumero([]); // Deve lançar exceção
    }
}