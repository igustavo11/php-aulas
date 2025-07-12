<?php
if($_POST){
    $prices = [
        'salgados' => [
            'coxinha' => 6.00,
            'risole' => 5.50,
            'esfiha' => 7.00
        ],
        'hamburgueres' => [
            'hamburguer_simples' => 15.00,
            'x_bacon' => 18.00,
            'x_tudo' => 22.00
        ],
        'pizzas' => [
            'pizza_calabresa' => 10.00,
            'pizza_frango' => 11.00,
            'pizza_portuguesa' => 12.00
        ],
        'bebidas' => [
            'refrigerante' => 8.00,
            'suco' => 7.50,
            'agua' => 4.00
        ]
    ];

    
    $subtotais = [
        'salgados' => 0,
        'hamburgueres' => 0,
        'pizzas' => 0,
        'bebidas' => 0
    ];

    
    $pedidos = [];

    
    foreach($prices as $categoria => $items){
        foreach($items as $item => $preco){
            if(isset($_POST[$item]) && $_POST[$item] > 0){
                $quantidade = $_POST[$item];
                $subtotal = $preco * $quantidade;
                $subtotais[$categoria] += $subtotal;
                
                $pedidos[] = [
                    'item' => $item,
                    'quantidade' => $quantidade,
                    'preco' => $preco,
                    'subtotal' => $subtotal
                ];
            }
        }
    }

    
    echo "<h3>pedidos:</h3>";
    foreach($pedidos as $pedido){
        echo $pedido['item'] . 
             " quantidade: " . $pedido['quantidade'] . 
             " x R$ " . number_format($pedido['preco'], 2, ',', '.') . 
             " = R$ " . number_format($pedido['subtotal'], 2, ',', '.') . "<br>";
    }

    
    echo "<h3>categoria:</h3>";
    foreach($subtotais as $categoria => $subtotal){
        if($subtotal > 0){
            echo $categoria . ": R$ " . number_format($subtotal, 2, ',', '.') . "<br>";
        }
    }

   
    $total = array_sum($subtotais);
    echo "<h3>total:</h3>";
    echo "R$ " . number_format($total, 2, ',', '.');
} else {
    echo "por favor, preencha o formulário.";
}