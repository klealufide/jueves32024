<?php 
$servename = "localhost";
$username = "root";
$password = "root";
$dbname = "matricula";

$conn = new mysqli($servename, $username, $password, $dbname);

if($conn->connect_error){
    die("Conexion fallida.");
}
