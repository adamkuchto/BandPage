<?php
    $action = $_REQUEST['action'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $data = pq_connect("host=localhost dbname=userdb user=adam password=adam")
        or die('nie można się połączyć: ' . pg_last_error());



