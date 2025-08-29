<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

/**
 * Testes unitários para a classe Calculator
 */
class CalculatorTest extends TestCase
{
    /**
     * Instância de Calculator que será usada em todos os testes
     */
    protected $calc;
    
    /**
     * Método executado antes de cada teste
     */
    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }
    
    // Testes para somar
    public function testSomarPositivos()
    {
        $this->assertEquals(5, $this->calc->somar(2, 3)); // Soma de positivos
    }
    public function testSomarNegativos()
    {
        $this->assertEquals(-5, $this->calc->somar(-2, -3)); // Soma de negativos
    }
    public function testSomarComZero()
    {
        $this->assertEquals(2, $this->calc->somar(2, 0)); // Soma com zero
    }

    // Testes para subtrair
    public function testSubtrairSimples()
    {
        $this->assertEquals(2, $this->calc->subtrair(5, 3)); // Subtração simples
    }
    public function testSubtrairNegativo()
    {
        $this->assertEquals(-1, $this->calc->subtrair(2, 3)); // Subtração que gera negativo
    }

    // Testes para multiplicar
    public function testMultiplicarPositivos()
    {
        $this->assertEquals(6, $this->calc->multiplicar(2, 3)); // Multiplicação de positivos
    }
    public function testMultiplicarComZero()
    {
        $this->assertEquals(0, $this->calc->multiplicar(2, 0)); // Multiplicação com zero
    }
    public function testMultiplicarNegativo()
    {
        $this->assertEquals(-6, $this->calc->multiplicar(2, -3)); // Multiplicação com negativo
    }

    // Testes para dividir
    public function testDividirExata()
    {
        $this->assertEquals(2, $this->calc->dividir(6, 3)); // Divisão exata
    }
    public function testDividirDecimal()
    {
        $this->assertEquals(2.5, $this->calc->dividir(5, 2)); // Divisão decimal
    }
    public function testDividirPorZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->dividir(5, 0); // Deve lançar exceção
    }

    // Testes para potencia
    public function testPotenciaPositivo()
    {
        $this->assertEquals(8, $this->calc->potencia(2, 3)); // Expoente positivo
    }
    public function testPotenciaZero()
    {
        $this->assertEquals(1, $this->calc->potencia(5, 0)); // Expoente zero
    }
    public function testPotenciaNegativo()
    {
        $this->assertEquals(0.25, $this->calc->potencia(2, -2)); // Expoente negativo
    }

    // Testes para raizQuadrada
    public function testRaizQuadradaPositivo()
    {
        $this->assertEquals(3, $this->calc->raizQuadrada(9)); // Raiz de positivo
    }
    public function testRaizQuadradaZero()
    {
        $this->assertEquals(0, $this->calc->raizQuadrada(0)); // Raiz de zero
    }
    public function testRaizQuadradaNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->raizQuadrada(-4); // Deve lançar exceção
    }

    // Testes para fatorial
    public function testFatorialZero()
    {
        $this->assertEquals(1, $this->calc->fatorial(0)); // 0!
    }
    public function testFatorialUm()
    {
        $this->assertEquals(1, $this->calc->fatorial(1)); // 1!
    }
    public function testFatorialMaior()
    {
        $this->assertEquals(24, $this->calc->fatorial(4)); // 4!
    }
    public function testFatorialNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->fatorial(-2); // Deve lançar exceção
    }

    // Testes para ehPar
    public function testEhParPositivo()
    {
        $this->assertTrue($this->calc->ehPar(4)); // Par positivo
    }
    public function testEhParImpar()
    {
        $this->assertFalse($this->calc->ehPar(3)); // Ímpar positivo
    }
    public function testEhParZero()
    {
        $this->assertTrue($this->calc->ehPar(0)); // Zero é par
    }
    public function testEhParNegativo()
    {
        $this->assertTrue($this->calc->ehPar(-2)); // Par negativo
        $this->assertFalse($this->calc->ehPar(-3)); // Ímpar negativo
    }

    // Testes para media
    public function testMediaVariosNumeros()
    {
        $this->assertEquals(3, $this->calc->media([1,2,3,4,5])); // Média de vários
    }
    public function testMediaUnicoNumero()
    {
        $this->assertEquals(10, $this->calc->media([10])); // Média de um só
    }
    public function testMediaArrayVazio()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->media([]); // Deve lançar exceção
    }

    // Testes para maiorNumero
    public function testMaiorNumeroPositivos()
    {
        $this->assertEquals(5, $this->calc->maiorNumero([1,2,3,4,5])); // Array positivos
    }
    public function testMaiorNumeroNegativos()
    {
        $this->assertEquals(-1, $this->calc->maiorNumero([-5,-4,-3,-2,-1])); // Array negativos
    }
    public function testMaiorNumeroMisto()
    {
        $this->assertEquals(10, $this->calc->maiorNumero([-10, 0, 10, 5])); // Array misto
    }
    public function testMaiorNumeroArrayVazio()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calc->maiorNumero([]); // Deve lançar exceção
    }
}