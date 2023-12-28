<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $database = "blood";

    $conn = new mysqli($servername, $user, $pass, $database);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
    }
?>