<?php
session_start();
$id_user = $_SESSION['idUser'];
include('../../../../../../../acciones/conexion.php');
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

//Datos permisos
$permiso = 20;
$insertarPermisos = mysqli_query($conexion, "INSERT INTO detalle_capsulas(id_usuario, id_permiso) VALUES ($id_user, $permiso)");

if ($insertarPermisos) {
    header('location: ../../../../../rutas/ruta-pw-i.php');

    exit();
}
