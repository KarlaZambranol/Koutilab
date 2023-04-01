<?php
session_start();
$id_user = $_SESSION['idUser'];
if (empty($_SESSION['active'])) {
  header('location: ../../../../../../../../index.php');
}
include "../../../../../../../../acciones/conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "capsula42";
$sql = mysqli_query($conexion, "SELECT c.*, d.* FROM capsulas c INNER JOIN detalle_permisos d ON c.id = d.id_permiso WHERE d.id_usuario = $id_user AND c.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: ../../../../basico/capsulas/acciones/capsulas.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Memorama</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- CSS -->
    <!-- efectos visuales -->
    <div class="">
        <h1>Tiempo <h1 id="tiempo"></h1>
        </h1>
    </div>
    <style>
        :root {
            --w: calc(70vw / 6);
            --h: calc(70vh / 4);
        }

        * {
            transition: all 0.5s;
        }

        body {
            padding: 0;
            margin: 0;
            -webkit-perspective: 1000;
            background: powderblue;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: calibri;
        }

        div {
            display: inline-block;
        }

        .area-tarjeta,
        .tarjeta,
        .cara {
            cursor: pointer;
            width: var(--w);
            min-width: 100px;
            height: var(--h);
        }

        .tarjeta {
            position: relative;
            transform-style: preserve-3d;
            animation: iniciar 5s;
        }

        .cara {
            position: absolute;
            backface-visibility: hidden;
            box-shadow: inset 0 0 0 5px white;
            font-size: 500%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .trasera {
            background-color: lightcyan;
            transform: rotateY(180deg);
        }

        .superior {
            background: linear-gradient(orange, darkorange);
        }

        .nuevo-juego {
            cursor: pointer;
            background: linear-gradient(orange, darkorange);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }

        @keyframes iniciar {

            20%,
            90% {
                transform: rotateY(180deg);
            }

            0%,
            100% {
                transform: rotateY(0deg);
            }
        }
    </style>

    <!-- HTML -->
    <!-- estructura visual -->

    <div id="tablero">
    </div>

    <br>

    <div class="nuevo-juego" onclick="generarTablero()">
        Nuevo Juego
    </div>

    <!-- JS -->
    <!-- parte lógica -->
    <script>
        let iconos = []
        let selecciones = []
        let tiempo = 60000;
        let intentos = 0;
        let puntos = 0;
        let reloj = 0;
        let total = 0
        let final = Date.now() + 60000;
        let gano = false;
        // generarTablero()
        let nombreJugador = ""
        let {
            value: nombre
        } = Swal.fire({
            title: 'Juego de memoria',
            input: 'text',
            inputLabel: 'Ingresa tu nombre',
            inputPlaceholder: 'Nombre'

        }).then((result) => {
            nombreJugador = result.value;
            console.log(result.value)
            // generarTablero()

        })

        function cargarIconos() {
            iconos = [
                '<i class="fa-brands fa-html5"></i>',
                '<i class="fa-brands fa-js"></i>',
                '<i class="fa-brands fa-css3-alt"></i>',
                '<i class="fa-solid fa-code"></i>',
                '<i class="fa-solid fa-terminal"></i>',
                '<i class="fa-solid fa-file-lines"></i>',
                // '<i class="fa-solid fa-browsers"></i>',
                // '<i class="fa-solid fa-window"></i>',
                // '<i class="fa-light fa-window"></i>',
                // '<i class="fa-solid fa-code-simple"></i>',
                // '<i class="fa-solid fa-brackets-curly"></i>',
                // '<i class="fa-solid fa-brackets-square"></i>',
                '<i class="fa-sharp fa-solid fa-file"></i>',
                '<i class="fa-sharp fa-solid fa-folder"></i>',
                // '<i class="fa-duotone fa-window"></i>',
                // '<i class="fa-light fa-brackets-round"></i>',
                '<i class="fa-sharp fa-solid fa-database"></i>',
                '<i class="fa-brands fa-java"></i>',
                '<i class="fa-sharp fa-solid fa-globe"></i>',
                '<i class="fa-regular fa-file-code"></i>'
            ]
        }

        function generarTablero() {
            cargarIconos()
            tiempo = 60000;
            intentos = 0;
            reloj = 0;
            total = 0
            final = Date.now() + 60000;
            selecciones = []
            let tablero = document.getElementById("tablero")
            let tarjetas = []
            for (let i = 0; i < 24; i++) {
                tarjetas.push(`
                <div class="area-tarjeta" onclick="seleccionarTarjeta(${ i })">
                    <div class="tarjeta" id="tarjeta${ i }">
                        <div class="cara trasera" id="trasera${ i }">
                            ${ iconos[0] }
                        </div>
                        <div class="cara superior">
                            <i class="far fa-question-circle"></i>
                        </div>
                    </div>
                </div>        
                `)
                if (i % 2 == 1) {
                    iconos.splice(0, 1)
                }
            }
            tarjetas.sort(() => Math.random() - 0.5)
            tablero.innerHTML = tarjetas.join(" ");
            document.getElementById("tiempo").innerHTML = "" + reloj

            // setTimeout(() => {


            //     reloj++;

            //     document.getElementById("tiempo").innerHTML = ": " + reloj
            // }, 1000);
            tiempoRes()
            // setTimeout(() => {
            //     Swal.fire({
            //         title: 'Perdiste',
            //         text: "se te acabo el tiempo",
            //         icon: 'info',
            //         confirmButtonColor: '#3085d6',
            //         confirmButtonText: 'Reintentar'
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             window.location.reload()
            //         }
            //     })
            //     // generarTablero();
            // }, tiempo);

        }

        function tiempoRes() {
            let cronometro = document.getElementById("tiempo");

            let elcrono = setInterval(tiempo, 10);

            function tiempo() {
                if (gano) {

                } else {
                    let diferencia = final - Date.now();
                    let sg = diferencia / 1000
                    if (diferencia <= 0) {
                        clearInterval(elcrono);
                        cronometro.classList.add('rojo');
                        sg = 0.0;
                    }
                    cronometro.innerHTML = sg;
                    if (sg == 0) {
                        Swal.fire({
                            title: 'Perdiste',
                            text: "se te acabo el tiempo, Puntos" + puntos,
                            icon: 'info',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Reintentar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                    }
                }

            }
        }

        function seleccionarTarjeta(i) {
            let tarjeta = document.getElementById("tarjeta" + i)
            if (tarjeta.style.transform != "rotateY(180deg)") {
                tarjeta.style.transform = "rotateY(180deg)"
                selecciones.push(i);

            }
            if (selecciones.length == 2) {
                deseleccionar(selecciones)
                selecciones = []

            }
        }

        function deseleccionar(selecciones) {
            setTimeout(() => {
                let trasera1 = document.getElementById("trasera" + selecciones[0])
                let trasera2 = document.getElementById("trasera" + selecciones[1])
                if (trasera1.innerHTML != trasera2.innerHTML) {
                    intentos++;


                    let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
                    let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
                    tarjeta1.style.transform = "rotateY(0deg)"
                    tarjeta2.style.transform = "rotateY(0deg)"
                } else {
                    intentos++;
                    puntos += 8.3
                    total++;
                    if (total == 12) {
                        gano = true;
                        Swal.fire({
                            title: 'Ganaste ' + nombreJugador,
                            text: "ganaste en " + intentos + " intentos puntuaje total 100",
                            icon: 'info',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Siguiente'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                        // alert();
                        // generarTablero()
                    }
                    trasera1.style.background = "plum"
                    trasera2.style.background = "plum"
                }
                console.log("🚀 ~ file: index.html ~ line 295 ~ setTimeout ~ intentos", intentos)
            }, 1000);
        }
    </script>

</body>

</html>