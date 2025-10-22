<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $primeiroNome = $_POST['primeiroNome'];
    $sobrenome = $_POST['sobrenome'];
    $escolhaPets = $_POST['escolhaPets'];
    
    echo("$primeiroNome -  $sobrenome - $escolhaPets <br/> Cadastrado com sucesso!!");
    echo('<br/> <a href="../index.php">Voltar</a>"');
    }
else{
    echo("get");
}

// header("location: ../index.php");

?>