<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // Array com os itens e preços da compra
$compras = [
    "frutas"     => 10.50,
    "verduras"   => 5.75,
    "laticínios" => 8.20,
    "carnes"     => 15.00
];

// 1. Inicializa a variável que guardará a soma total
$total = 0;

// Cabeçalho para a lista
echo "<h1>Resumo da Compra</h1>";

// 2. Usa um único laço foreach para:
//    a) Exibir cada item e seu preço.
//    b) Somar o preço ao total.
foreach ($compras as $item => $preco) {
    echo "Item: " . $item . " - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}

// 3. Após o fim do laço, exibe o total final já formatado.
echo "<h2>Total: R$ " . number_format($total, 2, ',', '.') . "</h2>";
   

    
    ?>
</body>
</html>