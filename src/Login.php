<?php
include 'Dbconn.php';

    if (isset($_POST['submit']))
    {
        try {
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

