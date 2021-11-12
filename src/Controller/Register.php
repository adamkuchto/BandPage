<?php
//require_once '/home/adam/BandPage/templates/Sites/Register.html.twig';
try {
$pdo = new PDO('pgsql:dbname=postgres;host=localhost', 'adam', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function Noslash($noslash):string
{
    $noslash = stripslashes($noslash);
    $noslash = strip_tags($noslash);
    return $noslash;
}

if (isset($_POST['submit'])) {
    $login = Noslash($_POST['Rusername']);
    $haslo1 = $_POST['Rpassword1'];
    $haslo2 = $_POST['Rpassword2'];
    $email = $_POST['email'];

        if ($haslo1 === $haslo2)
        {
            $superpass = password_hash($haslo1,PASSWORD_BCRYPT);
            $query = "INSERT INTO users VALUES('$login','$superpass','$email')";
            $stmt= $pdo->prepare($query);
            $pdo->query($query);

            echo "Konto zostało utworzone!";
            session_start();
        } else echo "Hasła nie są takie same";
}
}catch(PDOException $e){
    echo $e->getMessage();
}