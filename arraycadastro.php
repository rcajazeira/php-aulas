<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Criação do array associativo com os dados do usuário
// As "chaves" são 'nome', 'idade' e 'email'.
// Os "valores" são os dados correspondentes.
$usuario = [
    "nome"  => "Maria Souza",
    "idade" => 28,
    "email" => "maria.s@exemplo.com"
];

// 2. Exibição dos dados formatados usando echo
echo "<h1>Dados do Usuário Cadastrado</h1>";

// Acessamos cada valor usando o nome da sua chave entre colchetes
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Idade: " . $usuario['idade'] . " anos<br>";
echo "E-mail: " . $usuario['email'] . "<br>";
    ?>
    
</body>
</html>