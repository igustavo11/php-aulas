<?php
    //arrays prices books
    $booksCollection = [
        "livro 1" => "PHP para iniciantes",
        "price 1" => 49.90,
        "livro 2" => "Aprenda JavaScript",
        "price 2" => 59.90,
        "livro 3" => "HTML e CSS",
        "price 3" => 39.90,
        "livro 4" => "Python para todos",
        "price 4" => 69.90,
    ];
    echo "O preço do livro" . " PHP para iniciantes é R$ " . $booksCollection["price 1"] . "<br> <br>";
    echo "<hr>";

    for ($i = 1; $i <= 4; $i++) {
        echo "livro: " . $booksCollection["livro " . $i] . " e preco " . $booksCollection["price " . $i] . "<br>";
    }
    echo "<hr>";
    $booksCollection["livro 5"] = "Java para desenvolvedores";
    $booksCollection["price 5"] = 79.90;

    for ($i = 1; $i <= 5; $i++) {
        echo "livro: " . $booksCollection["livro " . $i] . " e preco " . $booksCollection["price " . $i] . "<br>";
    }

    $total = 0;
    for ($i = 1; $i <= 5; $i++) {
        $total += $booksCollection["price " . $i];
    }
    echo "<hr>";
    echo "O valor total dos livros é: R$ " . number_format($total, 2, ',', '.') . "<br>";