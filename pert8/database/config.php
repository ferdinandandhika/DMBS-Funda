<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "universitas_50421513";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>