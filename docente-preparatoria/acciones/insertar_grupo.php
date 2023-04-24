<?php

include('../../acciones/conexion.php');
session_start();

//Datos grupo
$materia = $_POST['materia'];
$nombre_grupo = $_POST['nombre_grupo'];
$grado = $_POST['grado'];
$curso = $_POST['curso'];
$clave = $_POST['clave'];
$id_user = $_SESSION['id_docente_preparatoria'];
$insertar_grupo = mysqli_query($conexion, "INSERT INTO grupos(materia, nombre_grupo, grado, curso, clave, id_docente) VALUES ('$materia', '$nombre_grupo', '$grado', '$curso', '$clave', '$id_user')");

if ($insertar_grupo) {
  $alert = '<div class="alert alert-primary" role="alert">
                          Grupo registrado
                      </div>';
  header("Location: ../../docente/grupos.php");
}
