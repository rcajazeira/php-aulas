<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato Simples</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Entre em Contato</h1>
        
        <form id="contactForm" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Seu nome completo"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="seu.email@exemplo.com"
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out"
            >
                Enviar Contato
            </button>
        </form>

        <div id="thankYouMessage" class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md hidden">
            </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const thankYouMessageDiv = document.getElementById('thankYouMessage');

            if (name && email) {
                thankYouMessageDiv.innerHTML = `Olá **${name}**, agradecemos pelo seu contato. Responderemos para **${email}** em breve.`;
                thankYouMessageDiv.classList.remove('hidden'); // Mostra a div
                document.getElementById('contactForm').reset(); // Limpa o formulário
            }
        });
    </script>
</body>
</html>