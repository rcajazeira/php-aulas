<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // lista de produtos usando array associativo com foreach
    $produtos = [
        "Arroz" => 3.00,
        "Feijão" => 3.50,
        "Macarrão" => 6.00,
        "Óleo" => 7.35
    ];
    // 1. Inicializa a variável que guardará a soma total
    $total = 0;
    foreach ($produtos as $key => $value) {
        // 2. Exibe cada produto e seu preço
        echo "Produto: " . $key . " - Preço: R$ " . number_format($value, 2, ',', '.') . "<br>";
        // 3. Soma o preço ao total
        $total += $value;
    }   
    // soma o total e exibe
    echo "<h2>Total: R$ " . number_format($total, 2,",", ".") ."<br>";
    
   
    ?>
</body>
</html>