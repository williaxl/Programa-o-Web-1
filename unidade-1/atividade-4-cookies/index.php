<?php
$nome = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];

    if (!empty($nome)) {
        setcookie("usuario", $nome, time() + (7 * 24 * 60 * 60));
    }
}

if (isset($_COOKIE["usuario"])) {
    $nome = $_COOKIE["usuario"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>

<h1>Bem-vindo</h1>

<?php if (!isset($_COOKIE["usuario"])): ?>

<form method="POST">
    Nome: <input type="text" name="nome">
    <button type="submit">Salvar</button>
</form>

<?php else: ?>

<h2>Olá, <?php echo $nome; ?>!</h2>

<?php endif; ?>

</body>
</html>
