<?php   
if($_POST) {
    $name = $_POST['nome'];
    $price = (float) $_POST['preco'];

    // formatar: saida = nome . ' - R$' . preco
    $output = $name . ' - R$' . number_format($price, 2, ',', '.');

    echo "Produto: " . $output;
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>