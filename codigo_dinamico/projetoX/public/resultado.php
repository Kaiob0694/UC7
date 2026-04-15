<?php
require '../src/templates/header.php';
?>

<div class="formulario">

    <h2>Dados do Aluno</h2>

    <div class="resultado">

        <p><strong>Nome:</strong> <?= $_GET['nome'] ?></p>
        <p><strong>Idade:</strong> <?= $_GET['idade'] ?></p>
        <p><strong>Email:</strong> <?= $_GET['email'] ?></p>
        <p><strong>Curso:</strong> <?= $_GET['curso'] ?></p>
        <p><strong>Período:</strong> <?= $_GET['periodo'] ?></p>

        <p><strong>Interesses:</strong></p>

        <?php if (isset($_GET['frontend'])): ?>
            <p> Front-end</p>
        <?php endif; ?>

        <?php if (isset($_GET['backend'])): ?>
            <p> Back-end</p>
        <?php endif; ?>

        <?php if (isset($_GET['mobile'])): ?>
            <p> Mobile</p>
        <?php endif; ?>

        <?php if (isset($_GET['dados'])): ?>
            <p> Dados</p>
        <?php endif; ?>

        <?php if (isset($_GET['ia'])): ?>
            <p> Inteligência Artificial</p>
        <?php endif; ?>

    </div>

</div>