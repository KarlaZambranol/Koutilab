<?php
  $servername = "localhost:3306";
    $database = "aerobotp_beta";
    $username = "root";
    $password = "";
    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conexion) {
        echo("La conexion fallo: " . mysqli_connect_error());
    }
