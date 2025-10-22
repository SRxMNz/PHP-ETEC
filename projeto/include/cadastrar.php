<?php
$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$escolhaPets = $_POST['escolhaPets'];

echo("$primeiroNome -  $sobrenome - $escolhaPets <br/> Cadastrado com sucesso!!");
echo('<br/> <a href="../index.php">Voltar</a>"')

// header("location: ../index.php");

?>