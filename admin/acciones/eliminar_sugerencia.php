<?php
session_start();
require("../../acciones/conexion.php");
$id_user = $_SESSION['idUser'];

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "UPDATE sugerencias SET estado = 0 WHERE id_sugerencia = $id");
    mysqli_close($conexion);
    header("Location: ../../admin/bandeja.php");
}
