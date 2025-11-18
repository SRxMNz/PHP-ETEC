<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testando se o cookie foi definido</title>
</head>
<body>
    <?php
    if (isset ($_COOKIE['usuario'])){
        echo "Bem vindo".$_COOKIE["usuario"] . "! <br>";
    }
    else{
        echo "usuario novo, seja bem vindo mano!!!!";
    }
    
    
    
    
    
    ?>
    
</body>
</html>