<?php
namespace App\Controller\Register;

use PDO;

$pdo = new PDO('pgsql:dbname=postgres;host=localhost', 'adam', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function Noslash($noslash)
{
    if (get_magic_quotes_gpc())
        $noslash = stripslashes($noslash);
    return $noslash;
}

if (isset($_POST['rejestruj'])) {
    $login = Noslash($_POST['login']);
    $haslo1 = Noslash($_POST['haslo1']);
    $haslo2 = Noslash($_POST['haslo2']);
    $email = Noslash($_POST['email']);
    $ip = Noslash($_SERVER['REMOTE_ADDR']);

    $conn = pg_pconnect("dbname=users");
    $query = "SELECT login FROM users WHERE login = $login";
    if (pg_query($conn, $query) == 0) {
        if ($haslo1 == $haslo2)
        {


            echo "Konto zostało utworzone!";
        } else echo "Hasła nie są takie same";
    } else echo "Podany login jest już zajęty.";
}
