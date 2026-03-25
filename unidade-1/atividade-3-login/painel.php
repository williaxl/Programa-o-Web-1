<?php
session_start();

if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

<h1>Bem-vindo!</h1>

<a href="logout.php">Sair</a>

</body>
</html>
