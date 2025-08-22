<?php
namespace App;

class Calculator {
    // Soma dois números
    public function somar($a, $b) {
        return $a + $b;
    }

    // Subtrai dois números
    public function subtrair($a, $b) {
        return $a - $b;
    }

    // Multiplica dois números
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // Divide dois números
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não é permitida");
        }
        return $a / $b;
    }

    // Calcula a potência de um número
    public function potencia($base, $expoente) {
        return pow($base, $expoente);
    }

    // Calcula a raiz quadrada de um número
    public function raizQuadrada($numero) {
        if ($numero < 0) {
            throw new \InvalidArgumentException("Não é possível calcular raiz quadrada de número negativo");
        }
        return sqrt($numero);
    }

    // Calcula o fatorial de um número
    public function fatorial($numero) {
        if ($numero < 0) {
            throw new \InvalidArgumentException("Fatorial não definido para números negativos");
        }
        if ($numero == 0 || $numero == 1) {
            return 1;
        }
        $resultado = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    // Verifica se um número é par
    public function ehPar($numero) {
        return $numero % 2 == 0;
    }

    // Calcula a média de um array de números
    public function media($numeros) {
        if (empty($numeros)) {
            throw new \InvalidArgumentException("Array não pode estar vazio");
        }
        $soma = array_sum($numeros);
        $quantidade = count($numeros);
        return $soma / $quantidade;
    }

    // Encontra o maior número em um array
    public function maiorNumero($numeros) {
        if (empty($numeros)) {
            throw new \InvalidArgumentException("Array não pode estar vazio");
        }
        return max($numeros);
    }
}