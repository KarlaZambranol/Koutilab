<?php
session_start();
$id_user = $_SESSION['id_alumno_universidad'];
if (empty($_SESSION['active']) || empty($_SESSION['id_alumno_universidad'])) {
    header('location: ../../../../../../../../acciones/cerrarsesion.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['id_alumno_universidad'];
$permiso = "capsula21";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas_universidad c INNER JOIN detalle_capsulas_universidad d ON c.id_capsula = d.id_capsula WHERE d.id_alumno = $id_user AND c.nombre = '$permiso' AND d.id_curso = 2");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: ../../../../intermedio/capsulas/acciones/capsulas.php");
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="../../../../../../img/lgk.png">
    <link rel="stylesheet" href="../../css/capsula-practica.css">
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="body">
        <div class="container">
            <a href="../../../../../../rutas/ruta-pw-i.php"><button style="float: left;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
            <div class="new-g" style="text-align: center;">Cápsula práctica 5 HTML</div><br>
            <div class="board">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Instrucciones</td>
                            <td>Ejemplo de resultado</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="nombre">
                                <p> Crea los siguientes controles de texto.
                                    <br><br>
                                </p>
                            </td>
                            <td class="ne">
                                <img src="../../../../../../img/contextopractica.png" style="height: 100px; width: 200px;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <h3 style="margin-bottom: 20px;">EDITOR DE CÓDIGO</h3>
                <!--
                <textarea onkeyup="actualizar()" class="cd" id="cd" placeholder="Escribe el código aquí"></textarea>
                <iframe class="editor" id="editor" srcdoc=" "></iframe> -->
                <!-- <button type="button" class="btn-grd" onclick="copyToClipBoard()" style="width: 5%; padding: 5px; margin: -30px 60px -20px 1050px; scale: 80%;"><i class="fas fa-paste fa-2x"></i></button> -->

                <div class="editor1">
                    <div class="titulo-edit1">
                        <h6>HTML</h6>
                    </div>
                    <div class="titulo-edit2">
                        <h6>CSS</h6>
                    </div>
                    <div class="titulo-edit3">
                        <h6>JAVASCRIPT</h6>
                    </div>
                    <div class="titulo-edit4">
                        <h6>SALIDA</h6>
                    </div>
                    <textarea onkeyup="actualizar()" id="html-code" class="cd" placeholder="Escribe el código HTML aquí"></textarea>
                    <textarea onkeyup="actualizar()" id="css-code" class="cd1" placeholder="Escribe el código CSS aquí"></textarea>
                    <textarea onkeyup="actualizar()" id="js-code" class="cd2" placeholder="Escribe el código JavaScript aquí"></textarea> <br>
                    <iframe id="output" class="editor" style="margin-top: 20px;"></iframe>
                </div>

            </div>
            <a style="text-decoration: none;"><button onclick="miFunc()" type="submit" class="btn-grd" id="update" style="width: 20%; margin-top:1%;" disabled>Evaluar</button></a>
        </div>
    </div>
    <script src="../../js/editor.js"></script>
    <script type="text/javascript">
        function run() {
            let htmlCode = document.querySelector(".editor1 #html-code").value;
            let cssCode = "<style>" + document.querySelector(".editor1 #css-code").value + "</style>";
            let jsCode = document.querySelector(".editor1 #js-code").value;
            let output = document.querySelector(".editor1 #output");

            output.contentDocument.body.innerHTML = htmlCode + cssCode;
            output.contentWindow.eval(jsCode);
        }
        document.querySelector(".editor1 #html-code").addEventListener("keyup", run);
        document.querySelector(".editor1 #css-code").addEventListener("keyup", run);
        document.querySelector(".editor1 #js-code").addEventListener("keyup", run);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.5.3/ace.js"></script>
    <script>
        function miFunc() {

            let htmlcode = document.getElementById("html-code").value;
            let csscode = document.getElementById("css-code").value;
            let jscode = document.getElementById("js-code").value;

            if (htmlcode == 'validar') {
                Swal.fire({
                    title: '¡Bien hecho!',
                    text: 'ganaste: ' + puntosFinales + " puntos",
                    imageUrl: "../../../../../../img/Thumbs-Up.gif",
                    imageHeight: 350,
                    backdrop: `
        rgba(0,143,255,0.6)
        url("../../../../../../img/fondo-estrellas.jpeg")
        `,
                    confirmButtonColor: '#a14cd9',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    window.location.href = '../../acciones/insertar_pd22.php?validar=' + 'incorrecto' + '&permiso=' + 22 + '&id_curso=' + 7 + '&practico=' + 10;
                });
            }
            // fallo, quitar vidas
            fail();
        }

        function fail() {
            Swal.fire({
                icon: 'info',
                title: 'Oops...',
                text: '¡Verifica tu respuesta!',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../../acciones/insertar_pd22.php?validar=' + 'incorrecto' + '&permiso=' + 22 + '&id_curso=' + 7 + '&practico=' + 10;
                }
            });
        }
    </script>
    <script>
        function copyToClipBoard() {
            var content = document.getElementById('editor');
            content.select();
            document.execCommand('copy');
        }
    </script>
    <script>
        function disableIE() {
            if (document.all) {
                return false;
            }
        }

        function disableNS(e) {
            if (document.layers || (document.getElementById && !document.all)) {
                if (e.which == 2 || e.which == 3) {
                    return false;
                }
            }
        }
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = disableNS;
        } else {
            document.onmouseup = disableNS;
            document.oncontextmenu = disableIE;
        }
        document.oncontextmenu = new Function("return false");
    </script>
    <script>
        onkeydown = e => {
            let tecla = e.which || e.keyCode;

            // Evaluar si se ha presionado la tecla Ctrl:
            if (e.ctrlKey) {
                // Evitar el comportamiento por defecto del nevagador:
                e.preventDefault();
                e.stopPropagation();

                // Mostrar el resultado de la combinación de las teclas:
                if (tecla === 85)
                    console.log("Ha presionado las teclas Ctrl + U");

                if (tecla === 83)
                    console.log("Ha presionado las teclas Ctrl + S");
            }
        }
    </script>
</body>