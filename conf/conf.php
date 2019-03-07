<?php

    $hostcon = "localhost";
    $hostusr = "user";
    $hostpsw = "password";
    $hostdb = "database";

    $con = mysqli_connect($hostcon,$hostusr,$hostpsw,$hostdb);

    // Check connection

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Select the table to produce a feed from
    $sql="SELECT * FROM products_table ORDER BY id";
?>
