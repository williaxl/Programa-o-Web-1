<?php
session_start();

if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit();
}

function validar($nome, $email) {
    return !empty($nome) && !empty($email);
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (validar($nome, $email)) {
        $_SESSION["registros"][] = [
            "nome" => $nome,
            "email" => $email
        ];
    } else {
        $mensagem = "Preencha todos os campos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema</title>
</head>
<body>

<h1>Sistema</h1>

<form method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button type="submit">Cadastrar</button>
</form>

<p style="color:red;"><?php echo $mensagem; ?></p>

<h2>Registros:</h2>

<ul>
<?php
if (!empty($_SESSION["registros"])) {
    foreach ($_SESSION["registros"] as $r) {
        echo "<li>{$r['nome']} - {$r['email']}</li>";
    }
}
?>
</ul>

<a href="logout.php">Sair</a>

</body>
</html>
