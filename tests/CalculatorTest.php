<?php
use PHPUnit\Framework\TestCase;

use App\Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSomar()
    {
        $a = 5;
        $b = 10;
        $esperado = 15; // 5 + 10 = 15
        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }
}