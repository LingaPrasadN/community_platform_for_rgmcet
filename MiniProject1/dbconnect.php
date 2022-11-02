<?php

    $conn = new mysqli("localhost","root","","final");

    if($conn->connect_error) {
        die("<h2>Failed to connect to database.");
    }


?>