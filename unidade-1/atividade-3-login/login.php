<?php
session_start();

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "1234") {
        $_SESSION["logado"] = true;
        header("Location: painel.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST">
    Usuário: <input type="text" name="usuario"><br><br>
    Senha: <input type="password" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>

<p style="color:red;"><?php echo $erro; ?></p>

</body>
</html>
