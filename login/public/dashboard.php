<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Área restrita</h1>
<p>Usuário autenticado com sucesso.</p>
<a href="logout.php">Sair</a>