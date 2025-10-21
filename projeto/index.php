<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastro de usúario</h1>

<form action="#" method= "post">

<label for="primeiroNome">Primeiro Nome</label>
<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Digite o seu primeiro nome..."
maxlength= "50" required autofocus>

<label for="sobrenome">Sobrenome</label>
<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome..."
maxlength= "50" required>

<label for="escolhaPets">escolha seu pet</label>
<select name="escolhaPets" id="escolhaPets">
    <option value="nenhum">Nenhum</option>
    <option value="cachorro">Cachorro</option>
    <option value="gato">Gato</option>
    <option value="calopsita">Calopsita</option>
    <option value="calopsita">Cerberus</option>
</select>

<button type="submit">Enviar</button>
<button type="reset">Limpar</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>