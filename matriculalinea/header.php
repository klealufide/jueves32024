<?php
session_start();
$listadoItems =  [
    ["url" => "index.php", "title" => "Inicio"],
    ["url" => "information.php", "title" => "Informacion"],
    ["url" => "registration.php", "title" => "Matricula"],
    ["url" => "contact.php", "title" => "Contacto"],
    ["url" => "login.php", "title" => "Login"],
    ["url" => "contact.php", "title" => "Registro"],
];

if(!empty($_SESSION)){
    if($_SESSION['rol'] == "admin"){
        $listadoItems =  [
            ["url" => "index.php", "title" => "Inicio"],
            ["url" => "information.php", "title" => "Informacion"],
            ["url" => "registration.php", "title" => "Matricula"],
            ["url" => "listRegistration.php", "title" => "Listado de estudiantes"],
            ["url" => "#", "title" => "Listado de profesores"],
            ["url" => "#", "title" => "Mantenimiento"],
            ["url" => "contact.php", "title" => "Contacto"],
            ["url" => "logout.php", "title" => "Salir"],
        ];
    } else {
        $listadoItems =  [
            ["url" => "index.php", "title" => "Inicio"],
            ["url" => "information.php", "title" => "Informacion"],
            ["url" => "registration.php", "title" => "Matricula"],
            ["url" => "contact.php", "title" => "Contacto"],
            ["url" => "logout.php", "title" => "Salir"]
        ];
    }

}

?>

<header>
    <nav>
        <ul class="menu">
            <?php foreach ($listadoItems as $item) { 
              echo '<li class="menu-item"><a href="'.$item["url"].' ">'.$item["title"] .'</a></li>';
             } ?>
        </ul>
        <?php if(!empty($_SESSION)){
            echo " <h3>Hola ".$_SESSION["username"]."</h3>";
        } ?>
    </nav>
</header>