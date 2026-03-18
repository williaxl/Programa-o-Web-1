<?php

// Questão 21
// Formulário simples (agenda estudantil)

if (["REQUEST_METHOD"] == "POST") {
     = ["nome"];
     = ["compromisso"];

    echo "<h2>Agenda do dia</h2>";
    echo "Aluno:  <br>";
    echo "Compromisso: ";
}

?>

<form method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Compromisso: <input type="text" name="compromisso"><br><br>
    <button type="submit">Salvar</button>
</form>
