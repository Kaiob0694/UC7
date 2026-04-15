<!DOCTYPE html>
<html>
<head>
    <title>Exemplo Dinâmico PHP</title>
</head>
<body>

<h1>Sistema de Saudação</h1>

<form method="POST">
    Nome: <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];

    include "../src/saudacao.php";

    echo gerarSaudacao($nome);
}
?>

</body>
</html>