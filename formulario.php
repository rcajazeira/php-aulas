<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário CRUD com Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php

var_dump($_POST);
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
var_dump($_SERVER);
// verifica se o metodo de request
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // faz algo
    echo "Método POST detectado.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // faz outra coisa
    echo "Método GET detectado.";
} else {
    echo "Método não suportado.";
}

?>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Formulário de Cadastro</h1>
        
        <form class="space-y-6">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input 
                    type="text" 
                    id="nome" 
                    name="nome" 
                    placeholder="Seu nome"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150 ease-in-out" required
                >
            </div>

            <div>
                <label for="sobrenome" class="block text-sm font-medium text-gray-700 mb-1">Sobrenome</label>
                <input 
                    type="text" 
                    id="sobrenome" 
                    name="sobrenome" 
                    placeholder="Seu sobrenome"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150 ease-in-out" required
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="seu.email@exemplo.com"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150 ease-in-out" required
                >
            </div>

            <div>
                <label for="senha" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input 
                    type="password" 
                    id="senha" 
                    name="senha" 
                    placeholder="********"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150 ease-in-out" required
                >
            </div>

            <div class="flex flex-col space-y-3 pt-4">
                <button 
                    type="submit" 
                    formmethod="POST" 
                    formaction="/api/cadastro" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out"
                >
                    Cadastrar (POST)
                </button>

                <button 
                    type="submit" 
                    formmethod="GET" 
                    formaction="/api/dados" 
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-150 ease-in-out"
                >
                    Buscar Dados (GET)
                </button>

                <button 
                    type="submit" 
                    formmethod="POST" 
                    formaction="/api/atualizar" 
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition duration-150 ease-in-out"
                    onclick="this.form.method='POST'; this.form.action='/api/atualizar';" 
                    aria-label="Atualizar (PUT)"
                >
                    Atualizar (PUT)
                </button>

                <button 
                    type="submit" 
                    formmethod="POST" 
                    formaction="/api/deletar" 
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition duration-150 ease-in-out"
                    onclick="this.form.method='POST'; this.form.action='/api/deletar';" 
                    aria-label="Deletar (DELETE)"
                >
                    Deletar (DELETE)
                </button>
            </div>
        </form>
    </div>
</body>
</html>