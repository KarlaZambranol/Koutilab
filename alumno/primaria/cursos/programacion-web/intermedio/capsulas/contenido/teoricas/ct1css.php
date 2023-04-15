<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
    header('location: ../../../../../../../../index.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "capsulapago5";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas_pago c INNER JOIN detalle_capsulas_pago d ON c.id_capsula_pago = d.id_permiso WHERE d.id_usuario = $id_user AND c.nombre = '$permiso' AND d.id_curso = 2;");
$existe = mysqli_fetch_all($sql);
if (empty($existe)) {
    header("Location: ../../../../intermedio/capsulas/contenido/pasarela/capsula1css.php");
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="../../../../../../img/lgk.png">
    <link rel="stylesheet" href="../../css/capsula-teoria.css" />
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.2/plyr.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="body">
        <div class="container">
            <a href="../../../../../../rutas/ruta-pw-i.php"><button style="float: left;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
            <div class="new-g" style="text-align: center;">Cápsula teórica 1 CSS</div><br>
            <section id="container-slider">
                <section id="container-slider">
                    <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
                    <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
                    <ul class="listslider">
                        <!-- Agregar linea de código <li><a itlist="itList_X" href="#"></a></li> cada que se agrega una imagen más-->
                        <li>
                            <a itlist="itList_1" href="#" class="item-select-slid"></a>
                        </li>
                        <li>
                            <a itlist="itList_2" href="#"></a>
                        </li>
                        <li>
                            <a itlist="itList_3" href="#"></a>
                        </li>
                        <li>
                            <a itlist="itList_4" href="#"></a>
                        </li>
                        <li>
                            <a itlist="itList_5" href="#"></a>
                        </li>
                        <li>
                            <a itlist="itList_6" href="#"></a>
                        </li>
                        <li>
                            <a itlist="itList_7" href="#"></a>
                        </li>
                    </ul>
                    <ul id="slider">
                        <li style="background-image: url('../../img/teoria1css/CT1.gif'); z-index:0; opacity: 1;"></li>
                        <li style="background-image: url('../../img/teoria1css/CT11.gif');"></li>
                        <li style="background-image: url('../../img/teoria1css/CT111.gif');"></li>
                        <li style="background-image: url('../../img/teoria1css/CT1111.gif');"></li>
                        <li style="background-image: url('../../img/teoria1css/CT11111.gif');"></li>
                        <li style="background-image: url('../../img/teoria1css/CT111111.gif');"></li>
                        <li>
                            <div style="width:80%; margin-left:10%; ">
                                <form class="forms" id="evaluar" method="POST" enctype="multipart/form-data" action="../../acciones/insertar_pd27.php">
                                    <h2>Para poder avanzar, responde la siguiente pregunta.</h2>
                                    <h1>¿Que es una pseudo-clase?</h1>
                                    <input type="hidden" name="permiso" value="2">
                                    <input type="hidden" name="teorico" value="10">
                                    <input type="hidden" name="id_curso" value="2">
                                    <input type="hidden" name="validar" id="validar" value="incorrecto">
                                    <textarea name="pregunta" onkeydown="actualizar1()" id="pregunta" placeholder="Escriba aquí su respuesta" rows="5" cols="40"></textarea>
                                    <button onclick="miFunc(); return false;" type="submit" class="btn-grd" id="update" disabled>Evaluar</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </section>
        </div>
    </div>
    <script>
        function miFunc() {
            //checar respuesta

            let ta = document.getElementById('pregunta').value;

            if (ta == 'Es una palabra clave que añade a los selectores' || ta == 'Palabra que añade a los selectores' || ta == 'Palabra clave' || ta == 'Añade a los selectores') {
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
                    if (result.isConfirmed) {
                        var inputValidar = document.getElementById("validar");
                        inputValidar.value = "correcto";
                        document.getElementById('evaluar').submit();
                    }

                });
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: '¡Verifica tu respuesta!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('evaluar').submit();
                    }
                });
            }
        }
    </script>
    <script src="../../js/validar.js"></script>
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="../../js/functions.js"></script>
</body>