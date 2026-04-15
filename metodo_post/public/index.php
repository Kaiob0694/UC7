<?php
require '../src/template/header.php';
?>

<div class="formulario">
    <form action="recebe.php" method="post">
        <label >Nome</label>
        <input type="text" name="nome" placeholder="Digite seu Nome">
        <label >Email</label>
        <input type="email" name="email" placeholder="Digite seu E-mail">
        <button type="submit">Enviar</button>
    </form>
</div>
