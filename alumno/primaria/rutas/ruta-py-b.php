<?php
session_start();
$id_user = $_SESSION['id_alumno_primaria'];
if (empty($_SESSION['active']) || empty($_SESSION['id_alumno_primaria'])) {
    header('location: ../../../acciones/cerrarsesion.php');
}
include "../../../acciones/conexion.php";
$id_user = $_SESSION['id_alumno_primaria'];
$permiso = "4";
$sql = mysqli_query($conexion, "SELECT a.* FROM acceso_cursos_primaria a WHERE a.id_alumno = $id_user AND a.id_curso = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe)) {
    header("Location: ../cursos/python/basico/capsulas/acciones/acceso_cursos.php");
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="../img/lgk.png">
    <link rel="stylesheet" href="../css/ruta-py-b.css">
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="body">
        <div class="containers">CURSO DE PYTHON BÁSICO DE KOUTILAB
            <a href="../perfil.php"><button style="float: right;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
        </div>
        <div class="container">
            <img class="igm" src="../img/PPP.png">
            <img class="gif" src="../img/loop.gif">
            <img class="gif1" src="../img/foco.gif">
            <img class="gif2" src="../img/signo.gif">
            <div>
            </div>
            <div class="ruta">
           <!-- PY -->
           <a href="../cursos/python/basico/capsulas/contenido/introduccion/ci1.php"><button class="btn1" id="intro"></button></a><!--Capsula introduccion a PY-->
                <!-- TEMA 1 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct1python.php"><button class="btn2" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp1.php"><button class="btn3" id="prac"></button></a><!--Capsula practica 1-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj1.php"><button class="btn4" id="game"></button></a><!--Capsula juego 1-->
                <!-- TEMA 2 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct2python.php"><button class="btn5" id="teoria"></button></a><!--Capsula teorica 2-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp2.php"><button class="btn6" id="prac"></button></a><!--Capsula practica 2-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj2.php"><button class="btn7" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct3python.php"><button class="btn8" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp3.php"><button class="btn9" id="prac"></button></a><!--Capsula practica 3-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj3.php"><button class="btn10" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct4python.php"><button class="btn11" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp4.php"><button class="btn12" id="prac"></button></a><!--Capsula practica 4-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj4.php"><button class="btn13" id="game"></button></a><!--Capsula juego 4-->
                <!-- TEMA 5 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct5python.php"><button class="btn14" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp5.php"><button class="btn15" id="prac"></button></a><!--Capsula practica 5-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj5.php"><button class="btn16" id="game"></button></a><!--Capsula juego 5-->
                <!-- TEMA 6 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct6python.php"><button class="btn17" id="teoria"></button></a><!--Capsula teorica 6-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp6.php"><button class="btn18" id="prac"></button></a><!--Capsula practica 6-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj6.php"><button class="btn19" id="game"></button></a><!--Capsula juego 6-->
                <!-- TEMA 7 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P1/ct7python.php"><button class="btn20" id="teoria"></button></a><!--Capsula teorica 7-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp7.php"><button class="btn21" id="prac"></button></a><!--Capsula practica 7-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj7.php"><button class="btn22" id="game"></button></a><!--Capsula juego 7-->
                <!-- EVALUATIVA PY-->
                <a href="../cursos/python/basico/capsulas/contenido/evaluativas/ce1.php"><button class="btn32" id="eva"></button></a><!--Capsula evaluativas PY-->
                    <!-- parte 2 -->
                 <!-- PY -->
                 <a href="../cursos/python/basico/capsulas/contenido/introduccion/ci2.php"><button class="btn33" id="intro"></button></a><!--Capsula introduccion a PY-->
                <!-- TEMA 1 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct1python.php"><button class="btn34" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp1.php"><button class="btn35" id="prac"></button></a><!--Capsula practica 1-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj1.php"><button class="btn36" id="game"></button></a><!--Capsula juego 1-->
                <!-- TEMA 2 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct2python.php"><button class="btn37" id="teoria"></button></a><!--Capsula teorica 2-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp2.php"><button class="btn38" id="prac"></button></a><!--Capsula practica 2-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj2.php"><button class="btn39" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct3python.php"><button class="btn40" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp3.php"><button class="btn41" id="prac"></button></a><!--Capsula practica 3-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj3.php"><button class="btn42" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct4python.php"><button class="btn43" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp4.php"><button class="btn44" id="prac"></button></a><!--Capsula practica 4-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj4.php"><button class="btn45" id="game"></button></a><!--Capsula juego 4-->
                <!-- TEMA 5 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct5python.php"><button class="btn46" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp5.php"><button class="btn47" id="prac"></button></a><!--Capsula practica 5-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj5.php"><button class="btn48" id="game"></button></a><!--Capsula juego 5-->
                <!-- TEMA 6 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct6python.php"><button class="btn49" id="teoria"></button></a><!--Capsula teorica 6-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp6.php"><button class="btn50" id="prac"></button></a><!--Capsula practica 6-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj6.php"><button class="btn51" id="game"></button></a><!--Capsula juego 6-->
                <!-- TEMA 7 -->
                <a href="../cursos/python/basico/capsulas/contenido/teoricas/P2/ct7python.php"><button class="btn52" id="teoria"></button></a><!--Capsula teorica 7-->
                <a href="../cursos/python/basico/capsulas/contenido/practicas/cp7.php"><button class="btn53" id="prac"></button></a><!--Capsula practica 7-->
                <a href="../cursos/python/basico/capsulas/contenido/juegos/cj7.php"><button class="btn54" id="game"></button></a><!--Capsula juego 7-->
                <!-- EVALUATIVA PY-->
                <a href="../cursos/python/basico/capsulas/contenido/evaluativas/ce2.php"><button class="btn64" id="eva"></button></a><!--Capsula evaluativas PY-->

              
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>

    </script>
    <script>
        $(".step").click(function() {
            $(this).addClass("active").prevAll().addClass("active");
            $(this).nextAll().removeClass("active");
        });

        $(".step01").click(function() {
            $("#line-progress").css("width", "3%");
            $(".discovery").addClass("active").siblings().removeClass("active");
        });

        $(".step02").click(function() {
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });

        $(".step03").click(function() {
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });

        $(".step04").click(function() {
            $("#line-progress").css("width", "75%");
            $(".production").addClass("active").siblings().removeClass("active");
        });

        $(".step05").click(function() {
            $("#line-progress").css("width", "100%");
            $(".analysis").addClass("active").siblings().removeClass("active");
        });
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