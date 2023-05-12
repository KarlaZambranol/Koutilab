<?php
session_start();
$id_user = $_SESSION['id_alumno_secundaria'];
if (empty($_SESSION['active']) || empty($_SESSION['id_alumno_secundaria'])) {
    header('location: ../../../../../../../../acciones/cerrarsesion.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['id_alumno_secundaria'];
$permiso = "capsula9";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas_secundaria c INNER JOIN detalle_capsulas_secundaria d ON c.id_capsula = d.id_capsula WHERE d.id_alumno = $id_user AND c.nombre = '$permiso' AND d.id_curso = 4");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: ../../../../basico/capsulas/acciones/capsulas.php");
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
            <a href="../../../../../../rutas/ruta-py-b.php"><button style="float: left;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
            <div class="new-g" style="text-align: center;">Cápsula práctica 3</div><br>
            <div class="board">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Instrucciones</td>
                            <td>Video práctica</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="nombre">
                                <p>Instrucciones: 1. haga 1 lista, que contenga el nombre de 5 compañeros
                                    de la escuela, esta lista debe ser no ordenada.
                                    <br>
                                    Ejemplos de como debe quedar:<br>
                                <ul style="margin-left: 40px;">
                                    <li>Juan</li>
                                    <li>Diego</li>
                                    <li>Ana</li>
                                    <li>Rosa</li>
                                    <li>Maria</li>
                                </ul>
                                <br>
                                2. haga 1 lista, que contenga el nombre de 5 sus 5 juguetes favoritos,
                                Estos juguetes deben estar ordenados, es claramente subjetivo
                                y no afecta el orden al resultado.
                                <br>
                                Ejemplos de como debe quedar:<br>
                                <ol style="margin-left: 40px;">
                                    <li>Carrito</li>
                                    <li>Muñeca</li>
                                    <li>Lego</li>
                                    <li>Patines</i>
                                    <li>Pelota</li>
                                </ol>
                                </p>
                            </td>
                            <td class="ne">
                                <video class="js-player" poster="thumbnail.jpg" playsinline controls style="height: 350px; width:100%; border: 1px solid black;">
                                    <source src="../../vid/CV3.mp4" type="video/mp4" />
                                </video>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="">
                <h3>EDITOR DE CÓDIGO</h3>
                <textarea onkeyup="actualizar()" class="cd" id="cd" placeholder="Escribe el código aquí"></textarea>
                <iframe class="editor" id="editor" srcdoc=" "></iframe>
            </div>
            <a style="text-decoration: none;"><button onclick="miFunc()" type="submit" class="btn-grd" id="update" style="width: 20%; margin-top:1%;" disabled>Evaluar</button></a>
        </div>
    </div>
    <script>
        function miFunc() {
            var frame = document.getElementById("editor").contentWindow.document;
            var ulist = frame.querySelector("ul").querySelectorAll("li").length;
            var olist = frame.querySelector("ol").querySelectorAll("li").length;
            if (ulist == 5 && olist == 5) {
                Swal.fire({
                    title: '¡Bien hecho!',
                    text: '¡Puntuación guardada con éxito!',
                    imageUrl: "../../../../../../img/Thumbs-Up.gif",
                    imageHeight: 350,
                    backdrop: `
                    rgba(0,143,255,0.6)
                    url("../../../../../../img/fondo-estrellas.jpeg")
                    `,
                    confirmButtonColor: '#a14cd9',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    window.location.href = '../../acciones/insertar_pd10.php?validar=' + 'correcto' + '&permiso=' + 10 + '&id_curso=' + 4 + '&practico=' + 10;
                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: '¡Verifica tu respuesta!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../../acciones/insertar_pd10.php?validar=' + 'incorrecto' + '&permiso=' + 10 + '&id_curso=' + 4 + '&practico=' + 10;
                    }
                });
            }
        }
    </script>
    <script src="../../js/fund.js"></script>
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