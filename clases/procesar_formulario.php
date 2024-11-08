<?php 

$archivo = fopen("formulario.txt","w");
fwrite($archivo,"nombre ".$_POST["nombre"]. " con edad ". $_POST["edad"]."\n");
fclose($archivo);

echo "Gracias por contactarnos! formulario enviado con exito";