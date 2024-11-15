<?php 

echo "<h1> Semana 9 </h1>";


$servename = "localhost";
$username = "root";
$password = "root";
$dbname = "matricula";

$conn = new mysqli($servename, $username, $password, $dbname);

if($conn->connect_error){
    die("Conexion fallida.");
}

echo "conexion exitosa.<br>";


// Insert 
/*
$query = "INSERT INTO `user`( `username`, `password`, `rol`) VALUES ('kleal','123456','admin')";

if($conn->query($query) ==  TRUE){
    echo "Registro guardado exitosamente <br>";
} else {
    echo "Error al agregar registro <br>";   
}
*/

$sql = "SELECT * FROM `user`";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: ".$row["id"].  " usuario: ".$row["username"]. " rol: ".$row["rol"]."<br>";
    }
}

$query = "UPDATE `user` SET `username`='klealr' WHERE id = 1";

if($conn->query($query) ==  TRUE){
    echo "Registro se actualizo exitosamente <br>";
} else {
    echo "Error al actualizar el registro <br>";   
}



$query = "DELETE FROM `user` WHERE id = 2";

if($conn->query($query) ==  TRUE){
    echo "Se elimino exitosamente <br>";
} else {
    echo "Error al borrar el registro <br>";   
}

// HASH 

$clave = "123456";

//$hash_password = password_hash($clave,PASSWORD_BCRYPT);
$hash_password = '$2y$10$Ctizas6D9KaCgYnwGxTHKOnathqZpXtskLBKtSnJl7GjQT6KUKCcC4';
echo $clave."<br>";
echo $hash_password;

if(password_verify($clave,$hash_password)){
    echo "El hash es igual al password";
} else {
    echo "El password no corresponde al hash";
}