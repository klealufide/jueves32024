<!DOCTYPE html>
<html>

<head>
    <title>Semana 6 y 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hola semana 6</h1>
    <?php
    /*
    $edad = 50;
    $edad2 = 60;
    $total = $edad + $edad2;
    echo $total."<br>";

    $nombre = "Karol ";
    $edad = 34;

    echo "Mi nombre es ".$nombre." , mi edad es de ".$edad."<br>";

    $valor = 5;
    $valor2 = "5";
    echo "------------ 2 == o 3 === ??????? -------------------<br> ";
    if($valor == $valor2){
        echo "El valor de las variables son iguales"."<br>";
    }

    if($valor === $valor2){
        echo "El valor y el tipo de datos de las variables son iguales"."<br>";
    } else {
        echo "El valor o el tipo de datos de las variables no son iguales"."<br>";
    }


    echo "------------  1 != o  2 !== ??????? -------------------<br> ";
    if($valor != $valor2){
        echo "El valor de las variables son diferentes"."<br>";
    }

    if($valor !== $valor2){
        echo "El valor o el tipo de datos de las variables son diferentes"."<br>";
    } else {
        echo "El valor y el tipo de datos de las variables son iguales"."<br>";
    }

    echo "------------ > o < o <= o >= -------------------<br> ";
    $edad = 10;
    if($edad >= 18){
        echo "Es un adulto <br>";
    } else {
        echo "Es menor de edad <br>";
    }

    echo "------------ && o ||  -------------------<br> ";

    $fruta = "pera";
    $esFruta = true;

    if($fruta == "manzana" && $esFruta){ // false X
        echo "Es una fruta de manzana<br>";
    }

    if(($fruta == "manzana" && $esFruta) || $fruta == "pera"){
        echo "Es una manzana fruta o es pera<br>";
    }

    if(!($fruta == "manzana")){ // F  -> T
        echo "Es una fruta que no es manzana<br>";
    }

    $contador = 1;
    echo "------------ while, do while, for  -------------------<br> ";
    while($contador <= 5){
        echo "Contador es: ".$contador."<br>";
        $contador++;
    }

    do {
        echo "Contador es: ".$contador."<br>";
        $contador++;
    } while($contador <= 5);

    
    for($i = 0; $i<= 20; $i++){
        echo "Contador es: ".$i."<br>";
    }
        */
    echo "<h2>Semana 8</h2> ";

    echo "------------ array INDEXADO -------------------<br> ";

    $listadoFrutas = array("manzana", "melon", "pera");
    $listadoCarros = ["toyota", "suzuki", "hyndai"];


    echo $listadoFrutas[2] . "<br>";
    echo $listadoCarros[2] . "<br>";

    echo "------------ array ASOCIATIVO -------------------<br> ";

    $estudiante = array("nombre" => "Karol", "apellido" => "Leal", "edad" => 34);
    $estudiante1 = array("nombre" => "Maria", "apellido" => "Perez", "edad" => 20);
    $estudiante2 = array("nombre" => "Juan", "apellido" => "Mora", "edad" => 31);

    $listadoEstudiantes = array($estudiante, $estudiante1, $estudiante2, array("nombre" => "Paola", "apellido" => "Fernandez", "edad" => 25));

    print_r($listadoEstudiantes[2]["apellido"]);
    echo "<br>";


    // Arreglo multidimensional
    foreach ($listadoEstudiantes as $index => $estudiante) {
        // index es el numero de la posicion del estudiante.
        // estudiante es el Arreglo de estudiantes -> nombre, apellido, edad
        echo " Estudiante numero : " . $index . "<br>";
        foreach ($estudiante as $key => $valor) {
            echo $key . " => " . $valor . "<br>";
        }

        echo "<br>";
    }

    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php

        foreach ($listadoEstudiantes as $index => $estudiante) {
            if ($estudiante["edad"] > 25) {
                echo "<tr><td>" . $estudiante["nombre"] . "</td><td>" . $estudiante["apellido"] . "</td><td>" . $estudiante["edad"] . "</td></tr>";
            }
        }
        ?>


    </table>
    <?php
    echo "<br>Archivos<br>";
    /*
        $archivo = fopen("miarchivo.txt","w");
        fwrite($archivo,"este es mi primer archivo en php.");
        fclose($archivo);
        */

    $archivo = fopen("miarchivo.txt", "r");
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea . "<br>";
    }
    fclose($archivo);

    try {
        $archivo = fopen("miarchivo.txt", "r");
        if (!$archivo) {
            throw new Exception("No se puede abrir el archivo");
        }
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            echo $linea . "<br>";
        }
        fclose($archivo);
    } catch (Exception $e) {
        echo "Se ha producido un error";
    }


    //print_r($_GET);
    //echo $_GET["nombre"];


    //get post

    ?>
    <h2>Formulario </h2>
    <form action="procesar_formulario.php" method="post">
        <label>Nombre:</label><input type="text" name="nombre" id="nombre"><label>EDAD:</label><input type="number" name="edad" id="edad">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>