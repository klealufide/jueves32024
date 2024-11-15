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
        <section>
            <h2>Por que eligir nuestra escuela?</h2>
            <p>Contamos con el mejor equipo educativo, instalaciones modernas y un ambiente familiar donde sus hijos
                crezcan de la mejor manera.</p>
            <div>
                <img src="./images/patio.jpg">
                <img src="./images/salon.jpg">
                <img src="https://www.comunidadbaratz.com/wp-content/uploads/Las-bibliotecas-escolares-son-imprescindibles-en-los-centros-educativos.jpg">
            </div>
        </section>
        <section>
            <h2>Como funciona el proceso de matricula</h2>
            <ol>
                <li>Registrese en nuestro sistema</li>
                <li>Completar la informacion del estudiante</li>
                <li>Confirmar el proceso y descarga de constancia</li>

            </ol>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UCtekqtKD18?si=9qHcuI0wx0g3v9-_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
        <section>
            <h2>Datos de contacto de la escuela</h2>
            <table>
                <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrativa</td>
                        <td>2222-2222</td>
                        <td>admin@escuela.com</td>
                    </tr>
                    <tr>
                        <td>Soporte</td>
                        <td>2222-2222</td>
                        <td>soporte@escuela.com</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php
    include("footer.php");
    ?>
</body>

</html>