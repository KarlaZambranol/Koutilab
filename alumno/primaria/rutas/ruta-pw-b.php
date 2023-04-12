<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
header('location: ../../../../../index.php');
}
include "../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "Programacion web basica";
$sql = mysqli_query($conexion, "SELECT a.* FROM acceso_cursos a WHERE a.id_alumno = $id_user AND a.curso = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe ) ) {
    header("Location: ../cursos/programacion-web/basico/capsulas/acciones/acceso_cursos.php");
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
<link rel="shortcut icon" href="../img/lgk.png">
    <link rel="stylesheet" href="../css/ruta.css">
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="body">
        <div class="containers">CURSO DE  PROGRAMACIÓN WEB BÁSICA DE KOUTILAB
            <a href="../perfil.php"><button style="float: right;" class="btn-b" id="btn-cerrar-modalV"><i class="fas fa-reply"></i></button></a>
        </div>
        <div class="container">
            <img class="igm" src="../img/PPP.png">
            <img class="gif" src="../img/loop.gif">
            <img class="gif1" src="../img/foco.gif">
            <img class="gif2" src="../img/signo.gif">
            <div class="ruta">
                <a href="../cursos/programacion-web/basico/capsulas/contenido/bienvenida/cb1.php"><button class="btn0" id="bien"></button></a> <!--Capsula introduccion al curso-->
                <!-- HTML -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/ci1html.php"><button class="btn1"  id="intro"></button></a><!--Capsula introduccion a HTML-->
                <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct1html.php"><button class="btn2" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp1html.php"><button class="btn3"  id="prac"></button></a><!--Capsula practica 1-->   
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn4"  id="game"></button></a><!--Capsula juego 1--> 
                <!-- TEMA 2 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct2html.php"><button class="btn5" id="teoria"></button></a><!--Capsula teorica 2-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp2html.php"><button class="btn6" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn7" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct3html.php"><button class="btn8" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp3html.php"><button class="btn9" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn10" id="game"></button></a><!--Capsula juego 3-->
                <!-- TEMA 4 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct4html.php"><button class="btn11" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp4html.php"><button class="btn12" id="prac"></button></a><!--Capsula practica 4--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn13" id="game"></button></a><!--Capsula juego 4-->
                <!-- TEMA 5 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct5html.php"><button class="btn14" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp5html.php"><button class="btn15" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn16" id="game"></button></a><!--Capsula juego 5--> 
                <!-- TEMA 6 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct6html.php"><button class="btn17" id="teoria"></button></a><!--Capsula teorica 6-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp6html.php"><button class="btn18" id="prac"></button></a><!--Capsula practica 6--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn19" id="game"></button></a><!--Capsula juego 6-->
                <!-- TEMA 7 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct7html.php"><button class="btn20" id="teoria"></button></a><!--Capsula teorica 7-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp7html.php"><button class="btn21" id="prac"></button></a><!--Capsula practica 7--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn22" id="game"></button></a><!--Capsula juego 7--> 
                <!-- TEMA 8 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct8html.php"><button class="btn23" id="teoria"></button></a><!--Capsula teorica 8-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp8html.php"><button class="btn24" id="prac"></button></a><!--Capsula practica 8--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn25" id="game"></button></a><!--Capsula juego 8-->
                <!-- TEMA 9 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct9html.php"><button class="btn26" id="teoria"></button></a><!--Capsula teorica 9-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp9html.php"><button class="btn27" id="prac"></button></a><!--Capsula practica 9--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn28" id="game"></button></a><!--Capsula juego 9-->
                <!-- TEMA 10 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct10html.php"><button class="btn29" id="teoria"></button></a><!--Capsula teorica 10-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp10html.php"><button class="btn30" id="prac"></button></a><!--Capsula practica 10--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn31" id="game"></button></a><!--Capsula juego 10-->
                <!-- EVALUATIVA HTML-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/ce1html.php"><button class="btn32" id="eva"></button></a><!--Capsula evaluativas HTML--> 

                <!-- CSS -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/introduccion/ci2css.php"><button class="btn33" id="intro"></button></a><!--Capsula introduccion a CSS-->
                <!-- TEMA 1 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct1css.php"><button class="btn34" id="teoria"></button></a><!--Capsula teorica 1-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp1css.php"><button class="btn35" id="prac"></button></a><!--Capsula practica 1-->   
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn36" id="game"></button></a><!--Capsula juego 1--> 
                <!-- TEMA 2 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct2css.php"><button class="btn37" id="teoria"></button></a><!--Capsula teorica 2-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp2css.php"><button class="btn38" id="prac"></button></a><!--Capsula practica 2--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn39" id="game"></button></a><!--Capsula juego 2-->
                <!-- TEMA 3 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct3css.php"><button class="btn40" id="teoria"></button></a><!--Capsula teorica 3-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp3css.php"><button class="btn41" id="prac"></button></a><!--Capsula practica 3--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn42" id="game"></button></a><!--Capsula juego 3--> 
                <!-- TEMA 4 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct4css.php"><button class="btn43" id="teoria"></button></a><!--Capsula teorica 4-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp4css.php"><button class="btn44" id="prac"></button></a><!--Capsula practica 4--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn45" id="game"></button></a><!--Capsula juego 4--> 
                <!-- TEMA 5 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct5css.php"><button class="btn46" id="teoria"></button></a><!--Capsula teorica 5-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp5css.php"><button class="btn47" id="prac"></button></a><!--Capsula practica 5--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn48" id="game"></button></a><!--Capsula juego 5--> 
                <!-- TEMA 6 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct6css.php"><button class="btn49" id="teoria"></button></a><!--Capsula teorica 6-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp6css.php"><button class="btn50" id="prac"></button></a><!--Capsula practica 6--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn51" id="game"></button></a><!--Capsula juego 6-->
                <!-- TEMA 7 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct7css.php"><button class="btn52" id="teoria"></button></a><!--Capsula teorica 7-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp7css.php"><button class="btn53" id="prac"></button></a><!--Capsula practica 7--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn54" id="game"></button></a><!--Capsula juego 7-->
                <!-- TEMA 8 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct8css.php"><button class="btn55" id="teoria"></button></a><!--Capsula teorica 8-->             
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp8css.php"><button class="btn56" id="prac"></button></a><!--Capsula practica 8--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn57" id="game"></button></a><!--Capsula juego 8--> 
                <!-- TEMA 9 -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct9css.php"><button class="btn58" id="teoria"></button></a><!--Capsula teorica 9-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp9css.php"><button class="btn59" id="prac"></button></a><!--Capsula practica 9--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn60" id="game"></button></a><!--Capsula juego 9-->
                <!-- TEMA 10 --> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/teoricas/ct10css.php"><button class="btn61" id="teoria"></button></a><!--Capsula teorica 10-->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/practicas/cp10css.php"><button class="btn62" id="prac"></button></a><!--Capsula practica 10--> 
                <a href="../cursos/programacion-web/basico/capsulas/contenido/juegos/"><button class="btn63" id="game"></button></a><!--Capsula juego 10-->
                <!-- EVALUATIVA CSS -->
                <a href="../cursos/programacion-web/basico/capsulas/contenido/evaluativas/ce2css.php"><button class="btn64" id="eva"></button></a><!--Capsula evaluativas HTML-->  
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    
</script>
<script>  
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
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
        if (e.which==2 || e.which==3) {
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = disableNS;
} 
else {
    document.onmouseup = disableNS;
    document.oncontextmenu = disableIE;
}
document.oncontextmenu=new Function("return false");

    </script>
    <script>
        onkeydown = e => {
let tecla = e.which || e.keyCode;

  // Evaluar si se ha presionado la tecla Ctrl:
if ( e.ctrlKey ) {
    // Evitar el comportamiento por defecto del nevagador:
    e.preventDefault();
    e.stopPropagation();
    
    // Mostrar el resultado de la combinación de las teclas:
    if ( tecla === 85 )
console.log("Ha presionado las teclas Ctrl + U");
    
    if ( tecla === 83 )
    console.log("Ha presionado las teclas Ctrl + S");
}
}
    </script>
</body>