<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
    header('location: ../../../../../../../../index.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "capsula21";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas c INNER JOIN detalle_capsulas d ON c.id_capsula = d.id_permiso WHERE d.id_usuario = $id_user AND c.nombre = '$permiso' AND d.id_curso = 1");
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
            <a href="../../../../../../rutas/ruta-pw-b.php"><button style="float: left;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
            <div class="new-g" style="text-align: center;">Cápsula práctica 7 CSS</div><br>
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
                                <p>Instrucciones: Crear un selector id.
                                    Te propongo un ejercicio práctico solo usando el archivo HTML:
                                    Pintaremos todos los párrafos de un mismo color con excepción de uno.
                                    Crea una regla dentro de la etiqueta style con el selector para un atributo determinado.
                                    Escribe diferentes párrafos.
                                    Asígnale a uno de ellos ese atributo id.
                                    <br> <br>
                                    Ejemplo de como debe quedar:<br> <br>
                                    <img src="../../../../../../img/selectoridpractica.png" style="height: 100px; width: 200px;">
                                </p>
                            </td>
                            <td class="ne">
                            
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
            var iframe = frame.querySelector("iframe");
            if (iframe == null) {
                alert("hacen falta cosas");
            }

            let elements = iframe != null ;
            let listsize = ul.querySelectorAll("li").length > 2;
            var styleh1 = window.getComputedStyle(h1);
            var stylep = window.getComputedStyle(p);

            let color = styleh1.getPropertyValue("color");
            let bgc = stylep.getPropertyValue("background-color");
            let hasColors = color != "rgb(0, 0, 0)" && bgc != "rgba(0, 0, 0, 0)";

            if (elements) {
                if (listsize) {
                    if (hasColors) {
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
                            window.location.href = '../../acciones/insertar_pd22.php?validar=' + 'incorrecto' + '&permiso=' + 22 + '&id_curso=' + 1 + '&practico=' + 10;
                        });
                    }
                }
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
                    window.location.href = '../../acciones/insertar_pd22.php?validar=' + 'incorrecto' + '&permiso=' + 22 + '&id_curso=' + 1 + '&practico=' + 10;
                }
            });
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