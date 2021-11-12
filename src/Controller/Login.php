<?php

$dsn = 'pgsql:dbname=postgres;host=localhost';
$user = 'adam';
$password = '';

    if (isset($_POST['submit']))
    {
        try {
            $baza = new PDO('pgsql:dbname=postgres;host=localhost', 'adam', '');
            $baza = pg_connect('users');
            $login = Noslash($_POST['username']);
            $haslo = Noslash($_POST['password']);
            $insert = pg_insert($baza, $login,$_POST, PG_DML_ESCAPE);
            if($insert){
                echo 'siadlo';
            }else{
                echo 'dupa';
            }
        }
        catch (PDOException $error){
            echo $error->getMessage();
        }
    }


