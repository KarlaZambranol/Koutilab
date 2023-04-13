<!-- Esta capsula debe de insertar el permiso 12 con insertar_cp12.php -->
<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
    header('location: ../../../../../../../../index.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "capsulapago4";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas_pago c INNER JOIN detalle_capsulas_pago d ON c.id_capsula_pago = d.id_permiso WHERE d.id_usuario = $id_user AND c.nombre = '$permiso' AND d.id_curso = 1;");
$existe = mysqli_fetch_all($sql);
if (empty($existe)) {
    header("Location: ../../../../basico/capsulas/contenido/pasarela/capsula2css.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css-juegos/drag-drop.css">
    <title>KOUTILAB</title>
</head>

<body>
    <!-- Titulo general -->
    <div class="titulo-gen">
        <h2 class="titulo" style="margin-left: 465px;"><b>ARRASTRAR Y SOLTAR</b></h2>
    </div>

    <!-- Alerta -->
    <div id="mensaje"></div>

    <!-- Contenido donde se encuentran las imagenes y los espacios donde van a ir -->
    <div class="contenido">

        <div class="div-vertical"></div>

        <div class="div-horizontal"></div>

        <!-- Titulo secundario -->
        <h4 class="titulo"><b>Arrastra el fragmento de código a tipo que le pertenece</b></h4>
        <br>

        <!-- Area donde se encuentran las imagenes inicialmente -->
        <div class="imagenes">
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/html5.png" alt="" draggable="true" ondragstart="drag(event)" id="html" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/html1.png" alt="" draggable="true" ondragstart="drag(event)" id="html" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/css2.png" alt="" draggable="true" ondragstart="drag(event)" id="css" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/html4.png" alt="" draggable="true" ondragstart="drag(event)" id="html" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/css3.png" alt="" draggable="true" ondragstart="drag(event)" id="css" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/html3.png" alt="" draggable="true" ondragstart="drag(event)" id="html" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/css4.png" alt="" draggable="true" ondragstart="drag(event)" id="css" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/html2.png" alt="" draggable="true" ondragstart="drag(event)" id="html" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/css5.png" alt="" draggable="true" ondragstart="drag(event)" id="css" class="imagen1">
            </div>
            <div class="caja-img">
                <img src="../../img/img_juegos/img4/css1.png" alt="" draggable="true" ondragstart="drag(event)" id="css" class="imagen1">
            </div>
        </div>

        <!-- Caja donde se encuentran los espacios para colocar las imagenes de HTML -->
        <div class="caja-html">
            <!-- Etiquetas HTML -->
            <div class="ht1">
                <div class="html-b-t">HTML</div>
            </div>
            <div class="ht2">
                <div class="html-b-t">HTML</div>
            </div>
            <div class="ht3">
                <div class="html-b-t">HTML</div>
            </div>
            <div class="ht4">
                <div class="html-b-t">HTML</div>
            </div>
            <div class="ht5">
                <div class="html-b-t">HTML</div>
            </div>

            <!-- Contenedores HTML -->
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="0" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="1" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="2" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="3" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="4" ondragover="allowDrop(event)"></div>
            </div>
        </div>

        <!-- Caja donde se encuentran los espacios para colocar las imagenes de CSS -->
        <div class="caja-css">
            <!-- Etiquetas CSS -->
            <div class="ht1">
                <div class="html-b-t">CSS</div>
            </div>
            <div class="ht2">
                <div class="html-b-t">CSS</div>
            </div>
            <div class="ht3">
                <div class="html-b-t">CSS</div>
            </div>
            <div class="ht4">
                <div class="html-b-t">CSS</div>
            </div>
            <div class="ht5">
                <div class="html-b-t">CSS</div>
            </div>

            <!-- Contenedores CSS -->
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="5" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="6" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="7" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="8" ondragover="allowDrop(event)"></div>
            </div>
            <div class="caja-contenedor">
                <div class="box" ondrop="drop(event)" id="9" ondragover="allowDrop(event)"></div>
            </div>
        </div>
        <div class="btn-v">
            <button class="verificar" onclick="verificar()">Comprobar respuestas</button>
            <button class="recargar" id="recarga" onclick="recargar()">Volver a intentar</button>
        </div>
    </div>

    <script>
        //Funcionamiento

        //Arreglo donde se declara el total de imagenes que se van a ocupar
        let arreglo = ["", "", "", "", "", "", "", "", "", ""];

        //Funcion para mantener alojada una imagen en un espacio vacio
        function allowDrop(ev) {
            ev.preventDefault();
        }

        //Funcion para poder arrastrar las imagenes y tomar el valor que tiene en id
        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        //Funcion para la transferencia del id al campo vacio solo si esta vacio
        function drop(ev) {
            if (arreglo[parseInt(ev.target.id)] == "") {
                var data = ev.dataTransfer.getData("text");
                arreglo[parseInt(ev.target.id)] = data;
                ev.target.appendChild(document.getElementById(data));
            }
        }

        //Funcion para validar las respuestas, primero si nungun campo esta vacio y luego si son las correctas
        function verificar() {
            if (arreglo[0] != "" && arreglo[1] != "" && arreglo[2] != "" && arreglo[3] != "" && arreglo[4] != "" && arreglo[5] != "" && arreglo[6] != "" && arreglo[7] != "" && arreglo[8] != "" && arreglo[9] != "") {
                if (arreglo[0] == "html" && arreglo[1] == "html" && arreglo[2] == "html" && arreglo[3] == "html" && arreglo[4] == "html" && arreglo[5] == "css" && arreglo[6] == "css" && arreglo[7] == "css" && arreglo[8] == "css" && arreglo[9] == "css") {
                    document.getElementById("mensaje").innerHTML = "Todas las palabras son correctas";
                    document.getElementById("mensaje").style.fontSize = "15px";
                    document.getElementById("mensaje").className = "alert alert-success";
                } else {
                    document.getElementById("mensaje").innerHTML = "Verifica tus respuestas";
                    document.getElementById("mensaje").className = "alert alert-danger";
                }
            }
        }
    </script>
    <script>
        //Funcion para recargar pagina
        let recargar = document.getElementById('recarga');
        recargar.addEventListener('click', _ => {
            location.reload();
        })
    </script>
</body>

</html>