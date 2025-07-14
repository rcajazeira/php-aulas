<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Ajuste para centralizar verticalmente */
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 17px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
        .error-message {
            background-color: #ffe0e0;
            color: red;
            border: 1px solid red;
        }
        .success-message {
            background-color: #e0ffe0;
            color: green;
            border: 1px solid green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login de Usuário</h2>

        <?php
        $username = ''; // Variável para manter o nome de usuário preenchido
        $message = ''; // Mensagem de erro ou sucesso
        $message_class = ''; // Classe CSS para estilizar a mensagem

        // Verifica se a requisição é do tipo POST (formulário enviado)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Pega os valores dos campos e remove espaços em branco extras
            $username = trim($_POST["username"] ?? '');
            $password = trim($_POST["password"] ?? '');

            // Valida se os campos não estão vazios
            if (empty($username) || empty($password)) {
                $message = "Por favor, preencha todos os campos.";
                $message_class = "error-message";
            } else {
                // Credenciais esperadas
                $expected_username = "admin";
                $expected_password = "1234";

                // Verifica se o nome de usuário e a senha estão corretos
                if ($username === $expected_username && $password === $expected_password) {
                    $message = "Bem-vindo, " . htmlspecialchars($username) . "!";
                    $message_class = "success-message";
                    // Limpa o nome de usuário após o login bem-sucedido (opcional)
                    $username = ''; 
                } else {
                    $message = "Nome de usuário ou senha incorretos.";
                    $message_class = "error-message";
                }
            }

            // Exibe a mensagem (de erro ou sucesso)
            if (!empty($message)) {
                echo "<div class='message " . $message_class . "'>" . $message . "</div>";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>