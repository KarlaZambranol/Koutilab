<?php
session_start();
$id_user = $_SESSION['idUser'];
include('../../../../../../../acciones/conexion.php');
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

//Datos permisos
$permiso = $_POST['permiso'];
$id_curso = $_POST['id_curso'];
$insertarPermisos = mysqli_query($conexion, "INSERT INTO detalle_capsulas(id_usuario, id_permiso, id_curso) VALUES ($id_user, $permiso, $id_curso)");

//Insertar valores en cero para el correcto funcionamiento de logica 
$query = "INSERT INTO estadisticas(trofeos, progreso, puntos, audiovisual, practico, teorico, id_alumno, id_curso) VALUES ('0','0','0','0','0','0','$id_user','$id_curso')";
$query_run = mysqli_query($conexion, $query);

if ($insertarPermisos) {
    header('location: ../contenido/teoricas/ct1css.php');
    exit();
}