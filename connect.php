<?php
//Conexion SINNTU
$servername = "10.220.0.224";
$username = "root";
$password = "Algar2015*";
$dbname = "c1bd_nutibara_migracion";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>