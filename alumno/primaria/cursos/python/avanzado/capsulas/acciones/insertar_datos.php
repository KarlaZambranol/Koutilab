<?php

include('../../../../../../../acciones/conexion.php');
session_start();
$id_user = $_SESSION['id_alumno_primaria'];

//Datos permisos
$permiso = $_POST['permiso'];
$insertarPermisos = mysqli_query($conexion, "INSERT INTO detalle_permisos(id_usuario, id_permiso) VALUES ($id_user, $permiso)");

//Datos estadisticas
$trofeos = $_POST['trofeos'];
$progreso = $_POST['progreso'];
$puntos = $_POST['puntos'];
$audivisual = $_POST['audivisual'];
$practico = $_POST['practico'];
$teorico = $_POST['teorico'];
$insertarEstadistica = mysqli_query($conexion, "INSERT INTO detalle_estadisticas(trofeos, progreso, puntos, audivisual, practico, teorico, id_alumno) VALUES ($trofeos, $progreso, $puntos, $audivisual, $practico, $teorico, $id_user)");

$consultaEstadistica = mysqli_query($conexion, "SELECT trofeos, SUM(trofeos) AS total_trofeos, progreso, SUM(progreso) AS total_progreso, puntos, SUM(puntos) AS total_puntos, audivisual, SUM(audivisual) AS total_audivisual, practico, SUM(practico) AS total_practico, teorico, SUM(teorico) AS total_teorico FROM detalle_estadisticas WHERE id_alumno = $id_user");
$resultadoEstadistica = mysqli_fetch_assoc($consultaEstadistica);
$totalTrofeos = $resultadoEstadistica['total_trofeos'];
$totalProgreso = $resultadoEstadistica['total_progreso'];
$totalPuntos = $resultadoEstadistica['total_puntos'];
$totalAudivisual = $resultadoEstadistica['total_audivisual'];
$totalPractico = $resultadoEstadistica['total_practico'];
$totalTeorico = $resultadoEstadistica['total_teorico'];
$insertarEstadisticas = mysqli_query($conexion, "UPDATE estadisticas SET trofeos = '$totalTrofeos', progreso = '$totalProgreso', puntos = '$totalPuntos', audivisual = '$totalAudivisual', practico = '$totalPractico', teorico = '$totalTeorico' WHERE id_alumno = $id_user");


//Datos cursos
$prueba_1 = $_POST['prueba_1'];
$prueba_2 = $_POST['prueba_2'];
$html = $_POST['html'];
$css = $_POST['css'];
$php = $_POST['php'];
$python = $_POST['python'];
$insertarCurso = mysqli_query($conexion, "INSERT INTO detalle_cursos(prueba_1, prueba_2, html, css, php, python, id_alumno) VALUES ($prueba_1, $prueba_2, $html, $css, $php, $python, $id_user)");

$consultaCurso = mysqli_query($conexion, "SELECT prueba_1, SUM(prueba_1) AS total_prueba_1, prueba_2, SUM(prueba_2) AS total_prueba_2, html, SUM(html) AS total_html, css, SUM(css) AS total_css, php, SUM(php) AS total_php, python, SUM(python) AS total_python FROM detalle_cursos WHERE id_alumno = $id_user");
$resultadoCurso = mysqli_fetch_assoc($consultaCurso);
$totalPrueba1 = $resultadoCurso['total_prueba_1'];
$totalPrueba2 = $resultadoCurso['total_prueba_2'];
$totalHtml = $resultadoCurso['total_html'];
$totalCss = $resultadoCurso['total_css'];
$totalPhp = $resultadoCurso['total_php'];
$totalPython = $resultadoCurso['total_python'];
$insertarCursos = mysqli_query($conexion, "UPDATE cursos SET prueba_1 = '$totalPrueba1', prueba_2 = '$totalPrueba2', html = '$totalHtml', css = '$totalCss', php = '$totalPhp', python = '$totalPython' WHERE id_alumno = $id_user");


if ($insertarEstadisticas && $insertarCursos && $insertarPermisos) {
    $alert = '<div class="alert alert-primary" role="alert">
                          Usuario registrado
                      </div>';
    header("Location: ../../../RutaC.php");
}

//Propuesta: USAR UPDATE ingresando estadisticas y trofeos al crear usuario

// $usuario = $_POST['usuario'];
// $contrasena = md5($_POST['contrasena']);
// $email = $_POST['email'];
// $query = mysqli_query($conexion, "SELECT * FROM usuario where correo = '$email'");
// $result = mysqli_fetch_array($query);
