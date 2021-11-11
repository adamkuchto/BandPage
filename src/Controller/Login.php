<?php

$dsn = 'pgsql:dbname=postgres;host=localhost';
$user = 'adam';
$password = '';


function Noslash($noslash)
{
    if (get_magic_quotes_gpc())
        $noslash = stripslashes($noslash);
    return $noslash;
}

    if (isset($_POST['loguj']))
    {
        $login = Noslash($_POST['login']);
        $haslo = Noslash($_POST['haslo']);
        $ip = Noslash($_SERVER['REMOTE_ADDR']);



            $_SESSION['zalogowany'] = true;
            $_SESSION['login'] = $login;

    }


