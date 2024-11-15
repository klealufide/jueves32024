<?php
session_start();

if (empty($_SESSION)) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <!--Metadatos-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php
include("footer.php");
?>