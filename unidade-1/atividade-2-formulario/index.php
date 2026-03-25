<?php
$erro = "";
$dados = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];
    $turno = $_POST["turno"];

    if (empty($nome) || empty($email) || empty($curso) || empty($turno)) {
        $erro = "Preencha todos os campos!";
    } else {
        $dados = "
        <h2>Dados cadastrados:</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Curso:</strong> $curso</p>
        <p><strong>Turno:</strong> $turno</p>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h1>Cadastro de Aluno</h1>

<form method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Email: <input type="email" name="email"><br><br>
    Curso: <input type="text" name="curso"><br><br>
    Turno: <input type="text" name="turno"><br><br>

    <button type="submit">Cadastrar</button>
</form>

<p style="color:red;"><?php echo $erro; ?></p>

<?php echo $dados; ?>

</body>
</html>
