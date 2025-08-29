# Php-Test-Class

## Descrição

Projeto desenvolvido para fins educacionais, com o objetivo de praticar testes unitários em PHP utilizando PHPUnit. A classe principal, `Calculator`, implementa operações matemáticas básicas e avançadas, enquanto o arquivo de testes cobre todos os cenários relevantes para garantir a robustez do código.

---

## Estrutura do Projeto

```
├── src/
│   └── app/
│       └── Calculator.php         # Implementação da classe Calculator
├── tests/
│   └── CalculatorTest.php        # Testes unitários para a Calculator
├── vendor/                       # Dependências gerenciadas pelo Composer
├── composer.json                 # Configuração do Composer e autoload
├── phpunit.xml                   # Configuração do PHPUnit
└── README.md                     # Este arquivo
```

---

## Funcionalidades da Calculator

- Soma, subtração, multiplicação e divisão (com tratamento de divisão por zero)
- Potenciação
- Raiz quadrada (com tratamento para números negativos)
- Fatorial (com tratamento para números negativos)
- Verificação se um número é par
- Cálculo da média de um array (com tratamento para array vazio)
- Busca do maior número em um array (com tratamento para array vazio)

---

## Como Executar os Testes

1. **Instale as dependências** (se ainda não instalou):
	```bash
	composer install
	```

2. **Atualize o autoload** (caso tenha feito alterações nas classes):
	```bash
	composer dump-autoload
	```

3. **Execute os testes**:
	```bash
	composer test
	```
	Ou diretamente:
	```bash
	vendor\bin\phpunit
	```

O PHPUnit irá rodar todos os testes presentes em `tests/CalculatorTest.php` e mostrar o resultado no terminal.

---

## Observações

- O projeto segue o padrão PSR-4 para autoload das classes.
- Todos os métodos da classe `Calculator` possuem cobertura de testes, incluindo casos de exceção.
- O código e os testes são comentados para facilitar o entendimento e o aprendizado.

---

## Autor - Jimmy Castilho

<br>
E-mail: jimmycastilho555@gmail.com

---

## Licença

Este projeto está licenciado sob a licença MIT.

