<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $preco = 100;
    $desconto = 0.2; // 20% de desconto 

    echo "Preço original: R$ " . $preco . "<br>";
    echo "Desconto: " . ($desconto * 100) . "%<br>";  
    
    // Corrigido: cálculo do valor final
    echo "Preço final: R$ " . ($preco - ($preco * $desconto)) . "<br>";

    // Opcional: mostrar cálculo detalhado
    echo "Cálculo: $preco - ($preco × $desconto) = " . ($preco - ($preco * $desconto));

    ?>
    
</body>
</html>