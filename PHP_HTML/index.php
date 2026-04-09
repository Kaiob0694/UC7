<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP no Navegador</title>
</head>
<body>

<p> <?php echo "Olá, usuário"; ?> </p>
<p> 20 + 20 é <?php echo 20 + 20; ?>. </p>

<?php
$nome = readline("Digite seu nome: ");
echo "<p>Olá, $nome</p>";

$num1 = 30;
$num2 = 40;
$resultado = $num1 - $num2;
echo "<p>O resultado da subtração é: {$resultado}</p>";

$a = 90;
$b = 100;
$resultado = $a * $b;
echo "<p>O resultado da multiplicação é: {$resultado}</p>";

$idade = 25;
$cidade = "Pindamonhagaba";

echo "<p>Tenho " . $idade . " anos e moro em " . $cidade . ".</p>";

$numero = 90;
$dobro = $numero * 2;
echo "$dobro";
?>