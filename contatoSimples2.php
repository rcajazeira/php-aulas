<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Completo com Validação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid red;
            padding: 10px;
            background-color: #ffe0e0;
            border-radius: 4px;
        }
        .success-message {
            color: green;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid green;
            padding: 10px;
            background-color: #e0ffe0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>

        <?php

        //metodo POST
        $nome = ''; // Variável para manter o valor do nome preenchido
        $email = ''; // Variável para manter o valor do email preenchido
        $erros = []; // Array para armazenar mensagens de erro
        $sucesso = true; // Flag para indicar se o processamento foi bem-sucedido

        



       /* $nome = ''; // Variável para manter o valor do nome preenchido
        $email = ''; // Variável para manter o valor do email preenchido
        $erros = []; // Array para armazenar mensagens de erro
        $sucesso = false; // Flag para indicar se o processamento foi bem-sucedido

        // Verifica se a requisição é do tipo POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = trim($_POST["nome"] ?? ''); // Pega o valor do campo 'nome' e remove espaços em branco
            $email = trim($_POST["email"] ?? ''); // Pega o valor do campo 'email' e remove espaços em branco

            // 1. Valida se o campo "nome" não está vazio
            if (empty($nome)) {
                $erros[] = "O campo **Nome** é obrigatório.";
            }

            // 2. Valida se o campo "e-mail" contém um endereço válido usando filter_var()
            if (empty($email)) {
                $erros[] = "O campo **E-mail** é obrigatório.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "O campo **E-mail** não contém um endereço válido.";
            }

            // Exibe mensagens de erro se as validações falharem
            if (!empty($erros)) {
                echo "<div class='error-message'>";
                echo "<h3>Erro(s) de Validação:</h3>";
                echo "<ul>";
                foreach ($erros as $erro) {
                    echo "<li>" . $erro . "</li>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                // Se não houver erros, os dados são válidos
                $sucesso = true;
                echo "<div class='success-message'>";
                echo "<h3>Dados Recebidos com Sucesso!</h3>";
                echo "<p>Nome: **" . htmlspecialchars($nome) . "**</p>";
                echo "<p>E-mail: **" . htmlspecialchars($email) . "**</p>";
                echo "<p>Você pode adicionar o código para salvar os dados no banco de dados aqui.</p>";
                echo "</div>";
                // Limpa os campos do formulário após o sucesso (opcional)
                $nome = '';
                $email = '';
            }
        } */
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>