<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php
    // comentário em PHP
    /*    comentário em PHP
    */
    echo "código em PHP";

    // Cooncatenação de strings é feita com ponto
    // a função echo imprime na tela
    echo "<h2>" . 1+2 . "</h2>";

    $nome = "Rafael Leite Barbosa Cajazeira";
    $idade = 300;
    $altura = "1.69";
    $casado = true;
    $jogos_favoritos = ["Lol", "Heretic"];
    $carro = null;

    //objetos > serão em aulas futuras
    //resource > serão em aulas futuras

    echo $nome . "<br>";
    echo $idade . "<br>";
    $nome = "Carol Florzita";

    echo $nome . "<br>";
    echo $idade . "<br>";   

    $texto1 = "Olá";
    $texto2 = "Mundo!";

    echo "<h2>" . $texto1. " ". $texto2 . "</h2>";

    // +, -, *, /, % são operadores aritméticos
    // ==, !=, ===, !==, <, >, <=, >= são operadores de comparação
    // &&, ||, ! são operadores lógicos     

    echo "<h2>" . (10 + 5) . "</h2>" . "<br>";
    echo "<h2>" . (10 - 5) . "</h2>" . "<br>";
    echo "<h2>" . (10 * 5) . "</h2>" . "<br>";
    echo "<h2>" . (10 / 5) . "</h2>" . "<br>";
    echo "<h2>" . (10 % 5) . "</h2>" . "<br>";
    echo "<h2>" . (10 ** 5) . "</h2>" . "<br>";

    //operadores de atribuição
    $x = 10;
    $x +=5; // $x = $x +5;

    // operadores de comparação

    ++$x;
    $x++;
    --$x;
    $x--;

    //Operadores de lÓGICOS
    //and 
    ECHO TRUE && FALSE;
    ECHO "<br>";
    // OR 
    echo true || false;     
    echo "<br>";
    // NOT 
    echo "<br>";    
    echo !true;
    echo "<br>";    

    //Condicionais
    $idade = 17;

    if ($idade >= 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }  
    
    // operador ternário é uma forma simplificada de if/else
    $nome = $idade > 18 ? "Rafael" : "Carol";
    echo "<br>";    

    $nome_da_variavel =  "String";

    // Switch case
   switch ($cor = "vermelho") {
        case "vermelho":
            echo "A cor é vermelho";
            break;
        case "azul":
            echo "A cor é azul";
            break;
        default:
            echo "Cor não encontrada";
    }   

    // while
    $contador = 0;
    while ($contador < 5) {
        echo "Contador: " . $contador . "<br>";
        $contador++;
    }       
    echo "<br>";
    
    // do while
    $contador = 0;      
    while ($contador < 5) {
        echo "Contador: " . $contador . "<br>";
        $contador++;
    }   
    echo "<br>";

    //foreach
    $numeros = [1, 2, 3, 4, 5,6,7,8,9,10,11,12,13,0,15,16,0,0,0,    
17,18,19,20];
    foreach ($numeros as $numero) {
        if ($numero == 0) {
            continue; // pula o número 0
        }
        echo "Número: " . $numero . "<br>";
    }       
    echo "<br>";

    // for
    for ($i = 0; $i < 10; $i++) {           
        echo "". $i ."<br>";
        $contador++;
    }   
    echo "<br>";
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            continue; // pula o número 5
        }
        echo "Número: " . $i . "<br>";
    }
    echo "<br>";

    // Funções
    function soma($a, $b) { 
        return $a + $b;
    }
    echo "Soma: " . soma(10, 5) . "<br>";   
    function saudacao($nome) {
        return "Olá, " . $nome . "!";
    }
    echo saudacao("Rafael") . "<br>";
    function calcularIdade($anoNascimento) {
        $anoAtual = date("Y");
        return $anoAtual - $anoNascimento;
    }
    echo "Idade: " . calcularIdade(1990) . "<br>";
    // Escopo de variáveis
    $variavelGlobal = "Sou global";
    function escopoVariavel() {
        global $variavelGlobal; // acessa a variável global
        echo $variavelGlobal . "<br>";
    }
    escopoVariavel();
    // Variáveis superglobais
    echo $_SERVER['PHP_SELF'] . "<br>"; // caminho do script atual  
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>"; // informações do navegador
    echo $_SERVER['REMOTE_ADDR'] . "<br>"; // endereço IP do visitante
    echo $_SERVER['REQUEST_METHOD'] . "<br>"; // método de requisição (GET, POST, etc.)
    echo $_SERVER['REQUEST_TIME'] . "<br>"; // timestamp da requisição
    echo $_SERVER['QUERY_STRING'] . "<br>"; // string de consulta da URL
    echo $_SERVER['HTTP_HOST'] . "<br>"; // nome do host
        
    // Arrays
    $arrayNumeros = [1, 2, 3, 4, 5];
    echo "Array: ";
    
   

?>
</body>
</html>