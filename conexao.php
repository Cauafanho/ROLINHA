<?php

    $server   = "localhost";
    $user     = "root";
    $password = "";
    $db       = "rolinha_agenda";

   $link = mysqli_connect($server,$user,$password,$db);
    mysqli_set_charset($link,'utf8');


?>