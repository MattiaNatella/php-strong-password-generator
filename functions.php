<?php
$password_length = isset($_GET['password']) && is_numeric($_GET['password']) ? (int) $_GET['password'] : 0;

function passwordGenerator($password_length)
{
    $numbers = '1234567890';
    $letters = 'abcdefghijklmnopqrstuwyzABCDEFGHIJKLMNOPQRSTUWYZ';
    $symbols = '!@#$%^&*()';
    $characters_pool = '';
    if (isset($_GET['letters']) && $_GET['letters'] == 'on') {
        $characters_pool .= $letters;
    }
    ;
    if (isset($_GET['numbers']) && $_GET['numbers'] == 'on') {
        $characters_pool .= $numbers;
    }
    ;
    if (isset($_GET['symbols']) && $_GET['symbols'] == 'on') {
        $characters_pool .= $symbols;
    }
    ;

    if (empty($characters_pool)) {
        return ' ';
    }

    $password = '';
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $characters_pool[random_int(0, strlen($characters_pool) - 1)];
    }
    return $password;
}
?>