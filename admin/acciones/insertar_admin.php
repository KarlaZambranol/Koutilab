<?php 

include('../../acciones/conexion.php');
session_start();

//Datos escuela
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$contrasena = md5($_POST['contrasena']);
$clave_admin = $_POST['clave'];
$pais = $_POST['pais'];

$insertar_admin = mysqli_query($conexion, "INSERT INTO admin(usuario, nombre, contrasena, clave, pais) VALUES ('$usuario', '$nombre', '$contrasena', '$clave_admin', '$pais')");

//Datos claves
// $insertar_clave = mysqli_query($conexion, "INSERT INTO roles(clave, rol) VALUES ('$clave_admin', '5')");

if ($insertar_admin) {
    $alert = '<div class="alert alert-primary" role="alert">
                          Administrador registrado
                      </div>';
    header("Location: ../../admin/administradores.php");
  }

?>