<?php

// --- Desafio 2: Encapsulamento com Atributos Privados ---

/**
 * Define a classe ContaBancaria.
 * Esta classe representa uma conta bancária, com um saldo que deve ser
 * acessado e modificado de forma controlada.
 */

class ContaBancaria {
    // Atributo privado da classe ContaBancaria.
    // O modificador 'private' significa que este atributo SÓ pode ser acessado
    // e modificado de DENTRO da própria classe ContaBancaria.
    // Isso é o que chamamos de encapsulamento: proteger os dados internos.
    private $saldo;

    /**
     * Construtor da classe ContaBancaria.
     * Ao criar uma nova conta, o saldo inicial é definido como 0.
     */

     public function __construct() {
        $this->saldo = 0; // Inicializa o saldo com zero ao criar a conta.
        echo "Nova conta bancária criada com saldo inicial de R$ " . number_format($this->saldo, 2, ',', '.') . "\n";
    }

     /**
     * Método público para depositar um valor na conta.
     * O modificador 'public' significa que este método pode ser chamado
     * de fora da classe. Ele é a "porta de entrada" controlada para modificar o saldo.
     *
     * @param float $valor O valor a ser depositado.
     */
    public function depositar($valor) {
        // Verifica se o valor do depósito é positivo.
        if ($valor > 0) {
            $this->saldo += $valor; // Adiciona o valor ao saldo.
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n";
        } else {
            echo "Erro: O valor do depósito deve ser positivo.\n";
        }
    }

    /**
     * Método público para obter o saldo atual da conta.
     * Este método também é 'public', sendo a "porta de saída" controlada
     * para ler o valor do saldo.
     *
     * @return float O saldo atual da conta.
     */
    public function getSaldo() {
        return $this->saldo; // Retorna o valor do atributo privado $saldo.
    }

    // Poderíamos ter outros métodos aqui, como sacar(), que também controlariam
    // o acesso ao saldo.
}

// --- Instanciando Objeto da Classe ContaBancaria e Interagindo ---

// Criando um novo objeto (instância) da classe ContaBancaria.
$minhaConta = new ContaBancaria();

echo "--------------------\n";

// Tentativa de acessar o saldo diretamente (isso causaria um erro fatal em PHP,
// pois $saldo é privado e não pode ser acessado de fora da classe).
// $minhaConta->saldo = 1000; // Descomente esta linha para ver o erro!
// echo "Saldo direto (ERRO ESPERADO): " . $minhaConta->saldo . "\n";

// Fazendo um depósito usando o método público 'depositar'.
// Esta é a forma correta e controlada de modificar o saldo.
$minhaConta->depositar(500);

echo "--------------------\n";

// Exibindo o saldo atual da conta usando o método público 'getSaldo'.
// Esta é a forma correta e controlada de ler o saldo.
echo "Saldo atual da conta: R$ " . number_format($minhaConta->getSaldo(), 2, ',', '.') . "\n";

echo "--------------------\n";

// Testando um depósito inválido
$minhaConta->depositar(-100);

echo "--------------------\n";

// Exibindo o saldo novamente para confirmar que o depósito inválido não o alterou
echo "Saldo após tentativa de depósito inválido: R$ " . number_format($minhaConta->getSaldo(), 2, ',', '.') . "\n";



    ?>