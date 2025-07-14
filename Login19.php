<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #555;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Entrar">
        </form>

        <?php echo $mensagem; ?>
    </div>
    <?php
$mensagem = ''; // Variável para armazenar mensagens de feedback

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? ''; // Pega o nome de usuário do POST, usando operador null coalesce para evitar erro se não existir
    $password = $_POST['password'] ?? ''; // Pega a senha do POST

    // Valida se os campos não estão vazios
    if (empty($username) || empty($password)) {
        $mensagem = '<p style="color: red;">Por favor, preencha todos os campos.</p>';
    } else {
        // Valida as credenciais
        if ($username === 'admin' && $password === '1234') {
            $mensagem = '<p style="color: green;">Bem-vindo, ' . htmlspecialchars($username) . '!</p>';
        } else {
            $mensagem = '<p style="color: red;">Nome de usuário ou senha incorretos.</p>';
        }
    }
}
?>
</body>
</html>