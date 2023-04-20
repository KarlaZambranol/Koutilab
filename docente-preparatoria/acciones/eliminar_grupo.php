<?php
session_start();
require("../../acciones/conexion.php");
$id_user = $_SESSION['idUser'];

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM grupos  WHERE id_grupo = $id");
    mysqli_close($conexion);
    header("Location: ../../docente/grupos.php");
}
