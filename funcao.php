<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // função boas vindas
    function boasVindas($nome) {
        echo "Bem-vindo(a), " . $nome . "!<br>";
    }       
    function boasVindas_nome($nome) {
        echo "Bem-vindo(a), " . $nome . "!<br>";
    }   
   echo "<h1>Função Boas Vindas</h1>";
    boasVindas("João"); 
    boasVindas_nome("Maria");
    echo "<br>";      

    ?>
</body>
</html>