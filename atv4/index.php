<?php   
    //dairy taks arrays index
    $tasks = [
        "acordar", "tomar banho", "comer", "trabalhar", "estudar", "jantar", "dormir"
    ];
    echo "minha primeira tarefa é ".  $tasks[0] . "<br>";
    echo "minha terceira tarefa é " . $tasks[2] . "<br><br>";
    echo "<hr>";
    echo "minhas tarefas do dia são: <br>";

    foreach ($tasks as $task) {;
        echo $task . "<br>";
    }
    echo "<hr>";
    array_push($tasks, "ir a academia");
    echo "adicionada nova tarefa: " . "<br>";
    echo "<br>";
    foreach ($tasks as $task) {
        echo $task . "<br>";
    }