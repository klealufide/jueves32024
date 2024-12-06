<?php
include('db.php');
//$data = json_decode(file_get_contents("php://input"), true);
$data = $_POST;

switch ($data['action']) {
    case 'add':
        if ($data["name"] ?? ''  != '') {
            $name = $data["name"];
            $query = "INSERT INTO teachers( name) VALUES ('$name')";
            try {
                if ($conn->query($query) ==  TRUE) {
                    echo json_encode(["status" => "00", "message" => "Se agrego correctamente el profesor", "name" => $name]);
                } else {
                    echo json_encode(["status" => "99", "message" => "Error al guardar al profesor"]);
                }
            } catch (Exception $e) {
                echo json_encode(["status" => "99", "message" => "Error al guardar al profesor"]);
            }
        }

        break;
    case 'delete':
        $id = $data["id"];
        $query = "DELETE FROM teachers where id = '$id'";
        try {
            if ($conn->query($query) ==  TRUE) {
                echo json_encode(["status" => "00", "message" => "Se Borro exitosamente al profesor", "name" => $name]);
            } else {
                echo json_encode(["status" => "99", "message" => "Error al borrar al profesor"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "99", "message" => "Error al borrar al profesor"]);
        }
        break;

    case 'getAll':
        $sql = "SELECT * FROM teachers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $teachers = [];
            while ($teacher = $result->fetch_assoc()) {
                $teachers[] = ["name" => $teacher["name"]];
            }
            echo json_encode(["status" => "00", "teachers" => $teachers]);
        } else {
            echo json_encode(["status" => "99", "teachers" => []]);
        }
        break;

    case 'get':
        $id = $data["id"];
        $sql = "SELECT * FROM teachers where id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $teachers = [];
            while ($teacher = $result->fetch_assoc()) {
                $teachers[] = ["name" => $teacher["name"]];
            }
            echo json_encode(["status" => "00", "teachers" => $teachers]);
        } else {
            echo json_encode(["status" => "99", "teachers" => []]);
        }
        break;

    case 'update':
        $id = $data["id"];
        $name = $data["name"];
        $query = "update teachers set name = '$name' where id = '$id'";
        try {
            if ($conn->query($query) ==  TRUE) {
                echo json_encode(["status" => "00", "message" => "Se actualizo exitosamente al profesor", "name" => $name]);
            } else {
                echo json_encode(["status" => "99", "message" => "Error al actualizar al profesor"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "99", "message" => "Error al actualizar al profesor"]);
        }
        break;
}
