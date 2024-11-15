<!DOCTYPE html>
<html>

<head>
    <!--Metadatos-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include('header.php') ?>
    <main>
        <h2>Inicio de sesion </h2>
        <form action="procesar_login.php" method="post">
            <label>Usuario:</label><br>
            <input type="text" name="username" id="username"><br>
            <label>Clave:</label><br>
            <input type="password" name="password" id="password"><br>
            <button type="submit">Enviar</button>
        </form>
    </main>

    <?php
    include("footer.php");
    ?>
</body>

</html>