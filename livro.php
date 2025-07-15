<?php

// --- Desafio 1: Criando uma Classe e Instanciando Objetos ---

/**
 * Define a classe Livro.
 * Uma classe é um "molde" para criar objetos. Ela define as propriedades (atributos)
 * e comportamentos (métodos) que os objetos dessa classe terão.
 */

class Livro {
    // Atributos da classe Livro
    // Estes são como variáveis que cada objeto Livro terá.
    public $titulo; // Título do livro
    public $autor;  // Autor do livro
    public $ano;    // Ano de publicação do livro

    /**
     * O construtor é um método especial que é chamado automaticamente
     * quando um novo objeto da classe é criado (instanciado).
     * Ele é usado para inicializar os atributos do objeto.
     *
     * @param string $titulo O título do livro.
     * @param string $autor O autor do livro.
     * @param int $ano O ano de publicação do livro.
     */

    public function __construct($titulo, $autor, $ano) {
        // 'this' refere-se ao objeto atual.
        // Estamos atribuindo os valores passados para os atributos do objeto.
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    /**
     * Método para exibir as informações do livro.
     * Este método acessa os atributos do próprio objeto ($this->titulo, etc.)
     * e os imprime na tela.
     */

public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Ano: " . $this->ano . "\n";
        echo "--------------------\n"; // Linha para separar as informações dos livros
    }
}

// --- Instanciando Objetos da Classe Livro ---

// Criando o primeiro objeto (instância) da classe Livro.
// Usamos a palavra-chave 'new' seguida do nome da classe e passamos
// os valores para o construtor.

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 1899);

// Criando o segundo objeto da classe Livro.
$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);

$livro3 = new Livro("Programação com React", "Rafael Cajazeira", 2030);

// --- Chamando o Método exibirInformacoes para ambos os objetos ---

echo "Informações do Livro 1:\n";
// Chamando o método exibirInformacoes para o objeto $livro1.
// Isso fará com que o método exiba as informações específicas de $livro1.
$livro1->exibirInformacoes();

echo "Informações do Livro 2:\n";
// Chamando o método exibirInformacoes para o objeto $livro2.
// Isso fará com que o método exiba as informações específicas de $livro2.
$livro2->exibirInformacoes();

echo "Informações do Livro 3:\n";
// Chamando o método exibirInformacoes para o objeto $livro2.
// Isso fará com que o método exiba as informações específicas de $livro2.
$livro3->exibirInformacoes();

?>


/*class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;

    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getDetalhes() {
        return "Título: {$this->titulo}, Autor: {$this->autor}, Ano de Publicação: {$this->anoPublicacao}";
    }
}*/
