<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['usuario'] == 'admin' && $_POST['senha'] == '123') {
        $_SESSION['logado'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<?php if (isset($erro)) echo $erro; ?>

<form method="POST">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>

</body>
</html>