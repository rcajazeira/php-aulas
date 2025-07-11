<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Cadastro de aluno com array associativo
    $aluno = [
        "aluno1" => 3.00,
        "aluno2" => 5.50,
        "aluno3" => 6.00 ];

        $somaNotas = 0; // Inicializa uma variável para somar as notas

echo "<h2>Notas dos Alunos:</h2>";
foreach ($aluno as $nome => $nota) {
    echo "Aluno: " . $nome . " - Nota: " . number_format($nota, 2) . "<br>";
    $somaNotas += $nota; // Adiciona a nota atual à soma
}

// Calcula a média
$quantidadeAlunos = count($aluno);
$media = $somaNotas / $quantidadeAlunos;

echo "---";
echo "<h3>Média das Notas: " . number_format($media, 2) . "</h3>";

       
    
    ?>
</body>
</html>