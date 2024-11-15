<?php 
include('db.php');
session_start();
if(!empty($_POST)){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `user` where username = '".$username."'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if(password_verify($password,$row["password"])){
                $_SESSION["username"] = $row["username"];
                $_SESSION["rol"] = $row["rol"];
                header("Location: index.php");
            } else {
                echo "Error en password o usuario";
                session_destroy();
            }
        }
    } else {
        echo "El usuario no existe.";
    }
    
}
