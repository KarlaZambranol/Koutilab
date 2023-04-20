<?php

include('../../acciones/conexion.php');
session_start();

//Datos escuela
$nombre_escuela = $_POST['nombre_escuela'];
$cct = $_POST['cct'];
$nombre_director = $_POST['nombre_director'];
$calle = $_POST['calle'];
$num_exterior = $_POST['num_exterior'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$codigo_postal = $_POST['codigo_postal'];
$nivel_educativo = $_POST['nivel_educativo'];
$autorizacion = $_POST['autorizacion'];
$id_user = $_SESSION['idUser'];

//Claves
$clave_director = $_POST['clave_director'];
$clave_docente = $_POST['clave_docente'];
$clave_alumno = $_POST['clave_alumno'];
$rol_alumno = $_POST['rol_alumno'];
$rol_docente = $_POST['rol_docente'];
$rol_director = $_POST['rol_director'];

//Query para insertar escuela
$insertar_escuela = mysqli_query($conexion, "INSERT INTO escuelas(nombre_escuela, cct, nombre_director, calle, num_exterior, estado, codigo_postal, nivel_educativo, pais, autorizacion, id_admin, clave_alumno, clave_docente, clave_director) VALUES ('$nombre_escuela', '$cct', '$nombre_director', '$calle', '$num_exterior', '$estado', '$codigo_postal', '$nivel_educativo', '$pais', '$autorizacion', '$id_user', '$clave_alumno', '$clave_docente', '$clave_director')");

//Query para insertar roles

$insertar_clave = mysqli_query($conexion, "INSERT INTO roles(clave, rol) VALUES ('$clave_alumno', '$rol_alumno'),('$clave_docente', '$rol_docente'),('$clave_director', '$rol_director')");

if ($insertar_escuela && $insertar_clave) {
  $alert = '<div class="alert alert-primary" role="alert">
                          Escuela registrada
                      </div>';
  header("Location: ../../admin/escuelas.php");
}
