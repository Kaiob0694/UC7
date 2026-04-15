<?php require '../src/template/header.php'; ?>

<div class="formulario">

<?php
if (
    isset($_POST['nome']) &&
    isset($_POST['email']) &&
    $_POST['nome'] != "" &&
    $_POST['email'] != ""
) {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
?>
    
    <div class="resultado">
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
    </div>

<?php
} else {
?>
    <p>Preencha todos os campos.</p>
<?php
}
?>

</div>