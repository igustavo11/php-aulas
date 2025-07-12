<?php
 
    $lista = ["Pão", "Leite", "Ovos"];

    if($_POST){
     
        $novo_item = $_POST['item_compra'];
        
        array_push($lista, $novo_item);
        
       
        echo "<h3>lista de Compras:</h3>";
        echo "<ul>";
        foreach($lista as $item){
            echo "<li>" .$item . "</li>";
        }
        echo "</ul>";
        
    } else {
        echo 'Por favor, preencha o formulário';
    }
?>