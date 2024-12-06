<?php
include("db.php");
$data = json_decode(file_get_contents("php://input"), true);
if($data["name"] ?? '' != ''){
    $query = "INSERT INTO contact( name, subject, message, email) VALUES ('".$data["name"]."','".$data["subject"]."','".$data["message"]."','".$data["email"]."')";

    if ($conn->query($query) ==  TRUE) {
        echo json_encode(["status" => "00", "message"=> "Registro guardado exitosamente"]);
    } else {
        echo json_encode(["status" => "99", "message"=> "Error al guardar registro"]);
    }
}


