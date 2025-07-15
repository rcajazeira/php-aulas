<?php
// --- Desafio 3: Herança Simples ---

/**
 * Classe base (ou classe pai) chamada Pessoa.
 * Ela define características comuns a todas as pessoas.
 */
class Pessoa {
    // Atributos protegidos da classe Pessoa.
    // 'protected' significa que estes atributos são acessíveis dentro da própria classe
    // e também por classes que herdam de Pessoa (classes filhas).
    protected $nome;
    protected $idade;

    /**
     * Construtor da classe Pessoa.
     * Inicializa o nome e a idade de uma pessoa.
     *
     * @param string $nome O nome da pessoa.
     * @param int $idade A idade da pessoa.
     */
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Objeto Pessoa/Estudante criado: " . $this->nome . "\n";
    }

    /**
     * Método para apresentar a pessoa.
     * Este método será herdado pelas classes filhas.
     */
    public function apresentar() {
        echo "Meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.\n";
    }
}

/**
 * Classe Estudante que herda de Pessoa.
 * A palavra-chave 'extends' indica que Estudante é uma subclasse de Pessoa.
 * Isso significa que Estudante automaticamente "ganha" todos os atributos
 * e métodos públicos/protegidos de Pessoa.
 */
class Estudante extends Pessoa {
    // Novo atributo específico da classe Estudante.
    public $curso;

    /**
     * Construtor da classe Estudante.
     *
     * @param string $nome O nome do estudante.
     * @param int $idade A idade do estudante.
     * @param string $curso O curso que o estudante está fazendo.
     */
    public function __construct($nome, $idade, $curso) {
        // Chama o construtor da classe pai (Pessoa) usando 'parent::__construct()'.
        // Isso é crucial para inicializar os atributos herdados ($nome e $idade).
        parent::__construct($nome, $idade);
        $this->curso = $curso; // Inicializa o novo atributo 'curso'.
    }

    /**
     * Sobrescrita do método apresentar().
     * Este método tem o mesmo nome do método na classe pai (Pessoa),
     * mas sua implementação é diferente para incluir o curso.
     * Quando você chama apresentar() em um objeto Estudante, esta versão
     * do método será executada, não a da classe Pessoa.
     */
    public function apresentar() {
        // Podemos chamar o método apresentar da classe pai se quisermos
        // reutilizar parte da lógica, mas neste caso, vamos reescrever completamente.
        // parent::apresentar(); // Descomente para ver a chamada do pai primeiro.
        echo "Meu nome é " . $this->nome . ", tenho " . $this->idade . " anos e estudo " . $this->curso . ".\n";
    }
}

// --- Criando um Objeto da Classe Estudante e Interagindo ---

echo "--- Criando um Estudante ---\n";
// Criando um objeto da classe Estudante.
// O construtor de Estudante será chamado, que por sua vez chama o construtor de Pessoa.
$estudante1 = new Estudante("Ana Silva", 20, "Engenharia de Software");

echo "----------------------------\n";

// Chamando o método apresentar() do objeto Estudante.
// Como o método foi sobrescrito na classe Estudante, a versão de Estudante será executada.
$estudante1->apresentar();

echo "----------------------------\n";

// Para comparação, vamos criar um objeto Pessoa também.
echo "--- Criando uma Pessoa ---\n";
$pessoa1 = new Pessoa("Carlos Souza", 35);
echo "----------------------------\n";
$pessoa1->apresentar();
?>