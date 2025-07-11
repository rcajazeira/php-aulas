<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // somando números pares de 1 a 100 usando while com operador %
    $soma = 0;
    $numero = 1;

    while ($numero <= 100) {
    if ($numero % 2 == 0) { // verifica se o número é par
        $soma += $numero; // soma o número par
    }
    $numero++; // incrementa o número
   }

// Linha 1: Correta - Exibe o valor da soma
echo $soma ."<br>"; 

// Linha 2: Incorreta - Exibe o valor final de $numero, que será 101
echo "A soma dos números pares de 1 a 100 é: " . $numero ."<br>"; 

// Linha 3: Correta - Exibe novamente o valor da soma
echo "". $soma ."<br>";
   
    ?>
</body>
</html>    