<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //login simples
    $usuario = "admin";
    $senha = "123456";  
    
   // usando os operadores logicos para login simples
    if ($usuario == "admin" && $senha == "12345") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha inválidos.";
    }       
    echo "<br><br>";
     if ($usuario == "admin" ||  $senha == "123456") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha inválidos.";
    } 

    ?>
</body>
</html>