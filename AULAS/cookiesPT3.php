<?php

if(isset($_COOKIE['voto_feito'])) {
    echo "<h2>Você já votou! Obrigado.</h2>";
    exit;
}
?>

<h1>Qual o melhor clube de São Paulo?</h1>

<form action="votar.php" method="GET">
    <label>
        <input type="radio" name="voto" value="Corinthians" required> Corinthians
    </label><br>

    <label>
        <input type="radio" name="voto" value="Palmeiras"> Palmeiras
    </label><br>

    <label>
        <input type="radio" name="voto" value="Santos"> Santos
    </label><br>

    <label>
        <input type="radio" name="voto" value="São Paulo"> São Paulo
    </label><br><br>

    <button type="submit">Votar</button>
</form>



