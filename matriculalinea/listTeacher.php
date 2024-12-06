<!DOCTYPE html>
<html>

<head>
    <!--Metadatos-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <?php 
    include('header.php');

    if (empty($_SESSION)) {
        header("Location: login.php");
    }
    ?>
    <main>
    <section>
            <form id="teacherForm">
                <h2>Profesor</h2>
                <div class="form-group">
                    <label for="name">Nombre de Profesor</label>
                    <input type="text" id="name" name="name">
                    <span id="error-teacher">El nombre es obligatorio.</span>
                </div>
                <button type="submit" class="boton">Enviar</button>
            </form>
        </section>
        <section>
            <table id="listTeachers">
                <tr>
                    <th>Nombre</th>
                </tr>

            </table>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>