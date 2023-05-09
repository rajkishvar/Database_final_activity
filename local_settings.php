<?php

    //MYSQL Connection
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'dadelahi_db2';
    $conn = mysqli_connect($host, $username, $password);
    
    $db_config = mysqli_select_db($conn, $db_name);



?>
