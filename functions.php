<?php
$password = "";
if (isset($_GET['length'])) {

    $numbers = '1234567890';
    $letters = 'abcdefghijklmnopqrstuwyzABCDEFGHIJKLMNOPQRSTUWYZ';
    $symbols = '!@#$%^&*()';
    $allChars = "";

    if (isset($_GET['numbers']) && $_GET['numbers']) {
        $allChars .= $numbers;
    }
    if (isset($_GET['letters']) && $_GET['letters']) {
        $allChars .= $letters;
    }
    if (isset($_GET['symbols']) && $_GET['symbols']) {
        $allChars .= $symbols;
    }

    for ($i = 0; $i < $_GET['length']; $i++) {

        //prendo un carattere randomico dalla stringa
        $randomPosition = rand(0, strlen($allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);

        //aggiungere questo carattere alla stringa delle pasword per tot volte
        $password .= $randomCharacter;

    }
}


?>