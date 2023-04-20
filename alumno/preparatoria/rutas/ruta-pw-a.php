<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
    header('location: ../../../../../index.php');
}
include "../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "Programacion web avanzada";
$sql = mysqli_query($conexion, "SELECT a.* FROM acceso_cursos a WHERE a.id_alumno = $id_user AND a.curso = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe)) {
    header("Location: ../cursos/programacion-web/avanzado/capsulas/acciones/acceso_cursos.php");
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="../img/lgk.png">
    <link rel="stylesheet" href="../css/ruta-pw-a.css">
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="body">
        <div class="containers">CURSO DE PROGRAMACIÓN WEB AVANZADO DE KOUTILAB
            <a href="../perfil.php"><button style="float: right;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
        </div>
        <div class="container">
            <img class="igm" src="../img/PPP.png">
            <img class="gif" src="../img/loop.gif">
            <img class="gif1" src="../img/foco.gif">
            <img class="gif2" src="../img/signo.gif">
            <div class="ruta">
                <a href="../cursos/programacion-web/basico/capsulas/contenido/bienvenida/"><button class="btn0" id="bien"></button></a> <!--Capsula introduccion al curso-->
                <!-- HTML -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/"><button class="btn1"  id="intro"></button></a><!--Capsula introduccion a HTML-->
                 <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn2" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn3"  id="prac"></button></a><!--Capsula practica 1-->   
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn4"  id="game"></button></a><!--Capsula juego 1--> 
                <!-- TEMA 2 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn5" id="teoria"></button></a><!--Capsula teorica 2-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn6" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn7" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn8" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn9" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn10" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn11" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn12" id="prac"></button></a><!--Capsula practica 4--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn13" id="game"></button></a><!--Capsula juego 4-->
                <!-- TEMA 5 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn14" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn15" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn16" id="game"></button></a><!--Capsula juego 5--> 
                <!-- EVALUATIVA HTML-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/"><button class="btn17" id="eva"></button></a><!--Capsula evaluativas HTML--> 

                <!-- CSS -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/"><button class="btn18" id="intro"></button></a><!--Capsula introduccion a CSS-->
                <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn19" id="teoria"></button></a><!--Capsula teorica 1-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn20" id="prac"></button></a><!--Capsula practica 1--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn21" id="game"></button></a><!--Capsula juego 1-->
                <!-- TEMA 2 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn22" id="teoria"></button></a><!--Capsula teorica 2-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn23" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn24" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn25" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn26" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn27" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn28" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn29" id="prac"></button></a><!--Capsula practica 4-->   
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn30" id="game"></button></a><!--Capsula juego 4--> 
                <!-- TEMA 5 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn31" id="teoria"></button></a><!--Capsula teorica 5-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn32" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn33" id="game"></button></a><!--Capsula juego 5-->
                 <!-- EVALUATIVA CSS-->
                 <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/"><button class="btn34" id="eva"></button></a><!--Capsula evaluativas CSS--> 

                <!-- JS -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/"><button class="btn35" id="intro"></button></a><!--Capsula introduccion a JS-->
                <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn36" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn37" id="prac"></button></a><!--Capsula practica 1--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn38" id="game"></button></a><!--Capsula juego 1--> 
                <!-- TEMA 2 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn39" id="teoria"></button></a><!--Capsula teorica 2-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn40" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn41" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn42" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn43" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn44" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn45" id="teoria"></button></a><!--Capsula teorica 4-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn46" id="prac"></button></a><!--Capsula practica 4--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn47" id="game"></button></a><!--Capsula juego 4--> 
                <!-- TEMA 5 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn48" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn49" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn50" id="game"></button></a><!--Capsula juego 5-->
                <!-- EVALUATIVA JS -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/"><button class="btn51" id="eva"></button></a><!--Capsula evaluativas JS-->  

                <!-- PHP -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/"><button class="btn52" id="intro"></button></a><!--Capsula introduccion a PHP-->
                <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn53" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn54" id="prac"></button></a><!--Capsula practica 1--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn55" id="game"></button></a><!--Capsula juego 1--> 
                <!-- TEMA 2 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn56" id="teoria"></button></a><!--Capsula teorica 2-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn57" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn58" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn59" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn60" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn61" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn62" id="teoria"></button></a><!--Capsula teorica 4-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn63" id="prac"></button></a><!--Capsula practica 4--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn64" id="game"></button></a><!--Capsula juego 4--> 
                <!-- TEMA 5 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/"><button class="btn65" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/"><button class="btn66" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn67" id="game"></button></a><!--Capsula juego 5-->
                <!-- EVALUATIVA PHP -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/"><button class="btn68" id="eva"></button></a><!--Capsula evaluativas PHP-->  
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