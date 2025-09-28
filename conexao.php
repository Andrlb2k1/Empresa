<?php
    $server = "localhost";
    $user = "root";
    $pass = "PostGreen2k22.";
    $bd = "empresa";

    if(mysqli_connect($server, $user, $pass, $bd)) {
        // echo "Conectado!";
    } else {
        echo "Erro!";
    }
?>