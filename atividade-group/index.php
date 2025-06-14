
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    $name = $_POST['name'] ?? ''; // se nao tiver o campo, atribui uma string vazia
    $email = $_POST['email'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $qualidade = $_POST['qualidade'] ?? '';
    $refeitorio = $_POST['refeitorio'] ?? []; // Pode ser um array se múltiplas opções forem selecionadas
    $sugestoes = $_POST['sugestoes'] ?? '';
    $avaliacao_form = $_POST['avaliacao_form'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Satisfação Alimentação</title>
    <style type="text/tailwindcss">
    </style>
</head>

<body class="bg-gray-100 min-h-screen py-8">
    <div class="max-w-lg mx-auto">

        <form action="index.php" method="post" class="bg-white rounded-lg shadow-lg p-6 space-y-6">

            <div class="text-center">
                <h1 class="text-2xl font-bold text-gray-800">Pesquisa satisfação alimentação empresarial</h1>
            </div>
            
            <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                <h4 class="text-lg font-semibold text-blue-800 mb-3">Identificação</h4>
                <div class="space-y-3">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome completo</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700 mb-1">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>
            
            <div class="bg-green-50 rounded-lg p-4 border-l-4 border-green-500">
                <h4 class="text-lg font-semibold text-green-800 mb-3">Avalie a qualidade do alimento</h4>
                <div class="flex justify-between">
                    <label class="flex items-center">
                        <input type="radio" name="qualidade" value="1" class="mr-2 text-green-600">
                        <span>1</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="qualidade" value="2" class="mr-2 text-green-600">
                        <span>2</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="qualidade" value="3" class="mr-2 text-green-600">
                        <span>3</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="qualidade" value="4" class="mr-2 text-green-600">
                        <span>4</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="qualidade" value="5" class="mr-2 text-green-600">
                        <span>5</span>
                    </label>
                </div>
            </div>
            
            <div class="bg-yellow-50 rounded-lg p-4 border-l-4 border-yellow-500">
                <h4 class="text-lg font-semibold text-yellow-800 mb-3">Avalie o refeitório</h4>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="refeitorio[]" value="ruim" class="mr-2 text-yellow-600">
                        <span>Ruim</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="refeitorio[]" value="aceitavel" class="mr-2 text-yellow-600">
                        <span>Aceitável</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="refeitorio[]" value="bom" class="mr-2 text-yellow-600">
                        <span>Bom</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="refeitorio[]" value="pode-melhorar" class="mr-2 text-yellow-600">
                        <span>Pode melhorar</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="refeitorio[]" value="excelente" class="mr-2 text-yellow-600">
                        <span>Excelente</span>
                    </label>
                </div>
            </div>
            
            <div class="bg-red-50 rounded-lg p-4 border-l-4 border-red-500">
                <h4 class="text-lg font-semibold text-red-800 mb-3">Caso queira deixe sugestões no que melhorar</h4>
                <textarea name="sugestoes" id="sugestoes" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 resize-none"></textarea>
            </div>

            <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-gray-500">
                <h4 class="text-lg font-semibold text-gray-800 mb-3">Como você avalia o formulário</h4>
                <div class="flex justify-between">
                    <label class="flex flex-col items-center">
                        <input type="radio" name="avaliacao_form" value="😔" class="mb-1">
                        <span>😔</span>
                    </label>
                    <label class="flex flex-col items-center">
                        <input type="radio" name="avaliacao_form" value="😑" class="mb-1">
                        <span>😑</span>
                    </label>
                    <label class="flex flex-col items-center">
                        <input type="radio" name="avaliacao_form" value="🙂" class="mb-1">
                        <span>🙂</span>
                    </label>
                    <label class="flex flex-col items-center">
                        <input type="radio" name="avaliacao_form" value="🤩" class="mb-1">
                        <span>🤩</span>
                    </label>
                </div>
            </div>
            
            <div class="text-center pt-4">
                <button type="submit" class="bg-clifford hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-lg transition-colors">
                    Enviar
                </button>
            </div>

        </form>
                
        <?php if ($form_submitted): ?>
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">   
                <div class="space-y-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Identificação:</h3>
                        <p><strong>Nome:</strong> <?= $name ?></p>
                        <p><strong>Email:</strong> <?= $email ?></p>
                        <p><strong>CPF:</strong> <?= $cpf ?></p>
                    </div>
                    
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800 mb-2">Avaliações:</h3>
                        <p><strong>Qualidade do alimento:</strong> <?= $qualidade ?></p>
                        <p><strong>Refeitório:</strong> <?= !empty($refeitorio)  ?></p>   <!-- !empty = verifica se esta vazio  -->                                   
                    </div>
                    
                    <?php if (!empty($sugestoes)): ?>
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-yellow-800 mb-2">Sugestões:</h3>
                        <p><?= $sugestoes ?></p>
                        <p><strong>Avaliação do formulário:</strong> <?= $avaliacao_form ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</html>