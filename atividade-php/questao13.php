<?php

// Questão 13
// Escopo global e local

 = "Sou global";

function teste() {
     = "Sou local";
    global ;

    echo  . "\n";
    echo  . "\n";
}

teste();

?>
