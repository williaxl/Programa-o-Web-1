<?php
function classificarAluno($nota) {
    if ($nota >= 7) {
        return "Aprovado";
    } elseif ($nota >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

$nota = 6;
$status = classificarAluno($nota);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Classificação Acadêmica</title>
</head>
<body>

<h1>Resultado do Aluno</h1>

<p><strong>Nota:</strong> <?php echo $nota; ?></p>
<p><strong>Status:</strong> <?php echo $status; ?></p>

<h2>Notas de 0 até <?php echo $nota; ?></h2>

<ul>
<?php
for ($i = 0; $i <= $nota; $i++) {
    echo "<li>$i</li>";
}
?>
</ul>

</body>
</html>
