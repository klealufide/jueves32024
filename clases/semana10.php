<!DOCTYPE html>
<html>

<head>
    <title>Semana 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body{
            padding: 20px;
        }
        p {
            color: blue;
        }

        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .blue {
            background-color:  blue!important;
        }

        #cuadrado {
            width: 100px;
            height: 100px;
            background-color: red;
            margin: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./semana10.js"></script>
</head>

<body>
<p id="first">First Paragraph</p>
<p>Second Paragraph</p>
<p>Yet one more Paragraph</p>

<img src="salon.jpg">

<h2>Clase: Semana 11</h2>

<div id="cuadrado"></div>
<div>
    <input type="button" value="Mostrar" id="mostrar">
    <input type="button" value="Ocultar" id="ocultar">
    <input type="button" value="+" id="agrandar">
    <input type="button" value="-" id="achicar">
    <input type="button" value="Normalidad" id="normal">
    <input type="button" value="Cambiar color" id="color">
</div>

<section>
    <input type="text" value="" id="task"><button id="addTask">Agregar Tarea</button>
    <div>
        <ul id="listTasks">
            <li>Terminar el login</li>
            <li>Mejorar el css del registro</li>
        </ul>
    </div>

</section>
</body>

</html>