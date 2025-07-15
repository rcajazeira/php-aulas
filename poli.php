<?php

// --- Desafio 4: Polimorfismo com Métodos ---

/**
 * Classe base (ou classe pai) chamada Animal.
 * Ela define um comportamento genérico para fazer um som.
 */
class Animal {
    /**
     * Método genérico para o animal fazer um som.
     * Este método será sobrescrito nas subclasses para comportamentos específicos.
     */
    public function fazerSom() {
        echo "O animal está fazendo um som.\n";
    }
}

/**
 * Subclasse Cachorro que herda de Animal.
 * Cachorro é um tipo de Animal.
 */
class Cachorro extends Animal {
    /**
     * Sobrescrita do método fazerSom() para o Cachorro.
     * Implementa o comportamento específico de um cachorro.
     */
    public function fazerSom() {
        echo "O cachorro está latindo: Au Au!\n";
    }
}

/**
 * Subclasse Gato que herda de Animal.
 * Gato é um tipo de Animal.
 */
class Gato extends Animal {
    /**
     * Sobrescrita do método fazerSom() para o Gato.
     * Implementa o comportamento específico de um gato.
     */
    public function fazerSom() {
        echo "O gato está miando: Miau!\n";
    }
}

// --- Criando Objetos das Subclasses e Chamando o Método Polimórfico ---

echo "--- Sons dos Animais ---\n";

// Criando um objeto da classe Cachorro.
$meuCachorro = new Cachorro();
// Chamando o método fazerSom() no objeto Cachorro.
// A versão específica de Cachorro será executada.
$meuCachorro->fazerSom(); // Saída: "O cachorro está latindo: Au Au!"

echo "------------------------\n";

// Criando um objeto da classe Gato.
$meuGato = new Gato();
// Chamando o método fazerSom() no objeto Gato.
// A versão específica de Gato será executada.
$meuGato->fazerSom(); // Saída: "O gato está miando: Miau!"

echo "------------------------\n";

// Exemplo de como o polimorfismo é útil:
// Você pode ter um array de Animais (polimorficamente)
$animais = [];
$animais[] = new Cachorro();
$animais[] = new Gato();
$animais[] = new Animal(); // Adicionando um animal genérico também

echo "--- Fazendo Sons em um Loop ---\n";
foreach ($animais as $animal) {
    // Para cada objeto no array, chamamos o mesmo método 'fazerSom()'.
    // No entanto, o comportamento será diferente dependendo do TIPO real do objeto.
    $animal->fazerSom();
}

?>