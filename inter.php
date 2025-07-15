<?php

// --- Desafio 5: Usando Interfaces ---

/**
 * Define a interface FormaGeometrica.
 * Uma interface é como um "contrato" ou um "plano" que especifica quais métodos
 * uma classe DEVE implementar se ela quiser "assinar" este contrato.
 * Interfaces não têm implementação de métodos, apenas a declaração (assinatura).
 * Todos os métodos em uma interface são implicitamente públicos.
 */
interface FormaGeometrica {
    /**
     * Declaração do método para calcular a área.
     * Classes que implementam esta interface devem fornecer a lógica para calcular a área.
     * @return float A área da forma geométrica.
     */
    public function calcularArea();

    /**
     * Declaração do método para calcular o perímetro.
     * Classes que implementam esta interface devem fornecer a lógica para calcular o perímetro.
     * @return float O perímetro da forma geométrica.
     */
    public function calcularPerimetro();
}

/**
 * Classe Quadrado que implementa a interface FormaGeometrica.
 * Ao usar 'implements FormaGeometrica', a classe Quadrado se compromete
 * a fornecer uma implementação para todos os métodos declarados na interface.
 */
class Quadrado implements FormaGeometrica {
    // Atributo para armazenar o lado do quadrado.
    private $lado;

    /**
     * Construtor da classe Quadrado.
     * @param float $lado O comprimento do lado do quadrado.
     */
    public function __construct($lado) {
        $this->lado = $lado;
        echo "Quadrado criado com lado: " . $this->lado . "\n";
    }

    /**
     * Implementação do método calcularArea() para um Quadrado.
     * (Obrigatório por implementar a interface FormaGeometrica)
     * @return float A área do quadrado.
     */
    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    /**
     * Implementação do método calcularPerimetro() para um Quadrado.
     * (Obrigatório por implementar a interface FormaGeometrica)
     * @return float O perímetro do quadrado.
     */
    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

/**
 * Classe Circulo que também implementa a interface FormaGeometrica.
 * Assim como Quadrado, Circulo também se compromete a implementar
 * calcularArea() e calcularPerimetro(), mas com sua própria lógica.
 */
class Circulo implements FormaGeometrica {
    // Atributo para armazenar o raio do círculo.
    private $raio;
    // Constante para o valor de PI, útil para cálculos de círculo.
    const PI = 3.14159;

    /**
     * Construtor da classe Circulo.
     * @param float $raio O raio do círculo.
     */
    public function __construct($raio) {
        $this->raio = $raio;
        echo "Círculo criado com raio: " . $this->raio . "\n";
    }

    /**
     * Implementação do método calcularArea() para um Círculo.
     * (Obrigatório por implementar a interface FormaGeometrica)
     * Fórmula: PI * raio^2
     * @return float A área do círculo.
     */
    public function calcularArea() {
        return self::PI * ($this->raio * $this->raio);
    }

    /**
     * Implementação do método calcularPerimetro() para um Círculo.
     * (Obrigatório por implementar a interface FormaGeometrica)
     * Fórmula: 2 * PI * raio
     * @return float O perímetro do círculo.
     */
    public function calcularPerimetro() {
        return 2 * self::PI * $this->raio;
    }
}

// --- Instanciando Objetos e Chamando Métodos ---

echo "--- Calculando Formas Geométricas ---\n";

// Criando um objeto Quadrado.
$meuQuadrado = new Quadrado(5); // Lado = 5
echo "Área do Quadrado: " . $meuQuadrado->calcularArea() . "\n";
echo "Perímetro do Quadrado: " . $meuQuadrado->calcularPerimetro() . "\n";

echo "-------------------------------------\n";

// Criando um objeto Círculo.
$meuCirculo = new Circulo(3); // Raio = 3
echo "Área do Círculo: " . $meuCirculo->calcularArea() . "\n";
echo "Perímetro do Círculo: " . $meuCirculo->calcularPerimetro() . "\n";

echo "-------------------------------------\n";

// O polimorfismo em ação com interfaces:
// Podemos ter um array de objetos de diferentes classes, desde que
// todos implementem a mesma interface.
$formas = [];
$formas[] = new Quadrado(4);
$formas[] = new Circulo(2.5);
$formas[] = new Quadrado(10);

echo "--- Processando Formas Polimorficamente ---\n";
foreach ($formas as $forma) {
    // Sabemos que cada 'forma' neste array TEM os métodos calcularArea() e calcularPerimetro()
    // porque todos implementam a interface FormaGeometrica.
    // O comportamento específico (cálculo de área/perímetro) será o da classe real do objeto.
    echo "Tipo de forma: " . get_class($forma) . "\n"; // get_class() mostra o nome da classe do objeto
    echo "Área: " . $forma->calcularArea() . "\n";
    echo "Perímetro: " . $forma->calcularPerimetro() . "\n";
    echo "-------------------------------------\n";
}

?>