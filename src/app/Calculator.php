<?php
namespace App;

class Calculator {
    public function somar($a, $b) { return $a + $b; }
    public function subtrair($a, $b) { return $a - $b; }
    public function multiplicar($a, $b) { return $a * $b; }
    public function dividir($a, $b) {
        if ($b == 0) throw new \InvalidArgumentException("Divisão por zero não é permitida");
        return $a / $b;
    }
    public function potencia($base, $expoente) { return pow($base, $expoente); }
    public function raizQuadrada($numero) {
        if ($numero < 0) throw new \InvalidArgumentException("Não é possível calcular raiz quadrada de número negativo");
        return sqrt($numero);
    }
    public function fatorial($numero) {
        if ($numero < 0) throw new \InvalidArgumentException("Fatorial não definido para números negativos");
        if ($numero == 0 || $numero == 1) return 1;
        $resultado = 1;
        for ($i = 2; $i <= $numero; $i++) $resultado *= $i;
        return $resultado;
    }
    public function ehPar($numero) { return $numero % 2 == 0; }
    public function media($numeros) {
        if (empty($numeros)) throw new \InvalidArgumentException("Array não pode estar vazio");
        return array_sum($numeros) / count($numeros);
    }
    public function maiorNumero($numeros) {
        if (empty($numeros)) throw new \InvalidArgumentException("Array não pode estar vazio");
        return max($numeros);
    }
}
