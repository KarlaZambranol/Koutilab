<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="../img/lgk.png">
    <link rel="stylesheet" href="../css/alumnos.css">
    <script src="https://kit.fontawesome.com/53845e078c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image: url(../img/bg1.png); padding-top: 0px; padding-bottom: 160px;">
    <?php
    require "../../acciones/conexion.php";

    if (!empty($_POST)) {
        $alert = "";
        if (empty($_POST['curso'])) {
            $alert = '<div class="alert alert-danger" role="alert">Todo los campos son requeridos</div>';
        } else {
            $idgrupo = $_GET['id'];
            $curso = $_POST['curso'];
            // Realiza una consulta SELECT para obtener los datos que deseas insertar
            $sql = "SELECT dg.id_alumno FROM alumnos a
            JOIN detalle_grupos dg
            ON dg.id_alumno = a.id_alumno
            WHERE dg.id_grupo = $idgrupo;";
            $resultado = $conexion->query($sql);

            // Verifica si la consulta SELECT tiene resultados
            if ($resultado->num_rows > 0) {
                // Itera sobre los resultados de la consulta SELECT y ejecuta una consulta INSERT para insertar cada registro en la tabla de destino
                while ($fila = $resultado->fetch_assoc()) {
                    $idalumno = $fila["id_alumno"];
                    $sql_insert = "INSERT INTO acceso_cursos(curso, id_alumno) VALUES ('$curso', $idalumno)";
                    $conexion->query($sql_insert);
                }
                header("Location: ../../docente/grupos.php");
            } else {
                header("Location: ../../docente/grupos.php");
            }
        }
    }

    // Mostrar Datos

    if (empty($_REQUEST['id'])) {
        header("Location: ../../docente/grupos.php");
    }
    $idgrupo = $_REQUEST['id'];
    $sql = mysqli_query($conexion, "SELECT * FROM grupos WHERE id_grupo = '$idgrupo'");
    $result_sql = mysqli_num_rows($sql);

    if ($result_sql == 0) {
        header("Location: ../../docente/grupos.php");
    } else {
        if ($data = mysqli_fetch_array($sql)) {
            $materia = $data['materia'];
            $nombregrupo = $data['nombre_grupo'];
        }
    }
    ?>

    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="container1" style="margin-top: 30px;">
                <div class="board" style="padding: 10px; margin-left: 7px; text-align:center; width: 98%;">
                    <h3 class="i-name">Agregar cursos al grupo</h3>
                </div>
                <form class="" action="" method="post">
                    <div class="user-details1">

                        <?php echo isset($alert) ? $alert : ''; ?>

                        <div class="input-box1">
                            <span class="details">Matería</span>
                            <input type="text" name="materia" id="materia" value="<?php echo $materia; ?>" required readonly>
                        </div>

                        <div class="input-box1">
                            <span class="details">Nombre grupo</span>
                            <input type="text" name="nombre_grupo" id="nombre_grupo" value="<?php echo $nombregrupo; ?>" required readonly>
                        </div>

                        <div class="input-box1">
                            <span class="details">Cursos</span>
                            <select style="height: 44px;" name="curso" type="select" required>
                                <option value="Programacion web basica">Programacion web basica</option>
                                <option value="Programacion web intermedio">Programacion web intermedio</option>
                                <option value="Programacion web avanzado">Programacion web avanzado</option>
                                <option value="Python basico">Python basico</option>
                                <option value="Python intermedio">Python intermedio</option>
                                <option value="Python avanzado">Python avanzado</option>
                                <option value="Arduino basico">Arduino basico</option>
                                <option value="Arduino intermedio">Arduino intermedio</option>
                                <option value="Arduino avanzado">Arduino avanzado</option>
                            </select>
                        </div>

                    </div>

                    <br>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                    <a href="../grupos.php" class="btn btn-danger">Atrás</a>
                </form>

            </div>

        </div>
    </div>

</body>