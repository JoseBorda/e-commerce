<?php

$servername = "localhost";
$username = "root";
$password = "";

$database = new mysqli($servername, $username, $password);

if ($database->connect_error) {
    die("Conexion fallido " . $database->connect_error);
}


?>