<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // Array com a lista de palavras inicial
$letras = [
    "A" => "Amor",
    "B" => "Bola",
    "C" => "Casa",
    "D" => "Dado",
    "E" => "Elefante"
];

// 1. Cria um novo array vazio para guardar as palavras longas
$palavrasComMaisDe5Letras = [];

// 2. Percorre cada item do array $letras
//    Pegamos apenas o valor (a palavra) de cada item.
foreach ($letras as $palavra) {
    
    // 3. Verifica se o comprimento (length) da palavra é maior que 5
    if (strlen($palavra) > 5) {
        
        // 4. Se for maior, adiciona a palavra ao nosso novo array
        $palavrasComMaisDe5Letras[] = $palavra;
    }
}

// 5. Exibe o resultado final para verificação
echo "Palavras com mais de 5 letras: <br>";
print_r($palavrasComMaisDe5Letras);


    ?>
</body>
</html>