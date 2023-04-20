<?php
session_start();
if (!empty($_SESSION['rol'])) {
    $rol_sesion = $_SESSION['rol'];

    if ($rol_sesion == 1) {
        header('location: admin/dashboard.php');
    } else if ($rol_sesion == 2) {
        header('location: alumno/primaria/perfil.php');
    } else if ($rol_sesion == 3) {
        header('location: docente/dashboard.php');
    } else if ($rol_sesion == 4) {
        header('location: director/perfil.php');
    } else if ($rol_sesion == 5) {
        header('location: adminsecundario/dashboard.php');
    }
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger" role="alert">
            Ingrese su usuario y su clave
            </div>';
        } else {
            require_once "acciones/conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $password = mysqli_real_escape_string($conexion, $_POST['contrasena']);
            $contrasena = md5(mysqli_real_escape_string($conexion, $_POST['contrasena']));
            $clave = mysqli_real_escape_string($conexion, $_POST['clave']);

            $validar_rol = mysqli_query($conexion, "SELECT * FROM roles WHERE clave = '$clave'");
            $resultado_rol = mysqli_num_rows($validar_rol);
            if ($resultado_rol > 0) {
                $rol = mysqli_fetch_array($validar_rol);
                if ($rol['rol'] == 1) {
                    $query_admin = mysqli_query($conexion, "SELECT * FROM admin WHERE usuario = '$user' AND contrasena = '$contrasena' AND clave = '$clave'");
                    mysqli_close($conexion);
                    $resultado_admin = mysqli_num_rows($query_admin);
                    if ($resultado_admin > 0) {
                        $dato_admin = mysqli_fetch_array($query_admin);
                        $_SESSION['active'] = true;
                        $_SESSION['rol'] = 1;
                        $_SESSION['idUser'] = $dato_admin['id_admin'];
                        $_SESSION['nombre'] = $dato_admin['nombre'];
                        $_SESSION['user'] = $dato_admin['usuario'];
                        header('location: admin/dashboard.php');
                    } else {
                        $alert = '<div style="color: red; margin-left: 80px;" class="alert alert-danger" role="alert">
                 Usuario o contraseña incorrecta
                 </div>';
                        session_destroy();
                    }
                } else if ($rol['rol'] == 2) {
                    $query_alumno = mysqli_query($conexion, "SELECT * FROM alumnos WHERE usuario = '$user' AND contrasena = '$contrasena' AND clave = '$clave'");
                    mysqli_close($conexion);
                    $resultado_alumno = mysqli_num_rows($query_alumno);
                    if ($resultado_alumno > 0) {
                        $dato_alumno = mysqli_fetch_array($query_alumno);
                        $_SESSION['active'] = true;
                        $_SESSION['rol'] = 2;
                        $_SESSION['idUser'] = $dato_alumno['id_alumno'];
                        $_SESSION['nombre'] = $dato_alumno['nombre'];
                        $_SESSION['user'] = $dato_alumno['usuario'];
                        header('location: alumno/primaria/perfil.php');
                    } else {
                        $alert = '<div style="color: red; margin-left: 80px;" class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrecta
                 </div>';
                        session_destroy();
                    }
                } else if ($rol['rol'] == 3) {
                    $query_docente = mysqli_query($conexion, "SELECT * FROM docentes WHERE usuario = '$user' AND contrasena = '$contrasena' AND clave = '$clave'");
                    mysqli_close($conexion);
                    $resultado_docente = mysqli_num_rows($query_docente);
                    if ($resultado_docente > 0) {
                        $dato_docente = mysqli_fetch_array($query_docente);
                        $_SESSION['active'] = true;
                        $_SESSION['rol'] = 3;
                        $_SESSION['idUser'] = $dato_docente['id_docente'];
                        $_SESSION['nombre'] = $dato_docente['nombre'];
                        $_SESSION['user'] = $dato_docente['usuario'];
                        header('location: docente/dashboard.php');
                    } else {
                        $alert = '<div style="color: red; margin-left: 80px;" class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrecta
                 </div>';
                        session_destroy();
                    }
                } else if ($rol['rol'] == 4) {
                    $query_director = mysqli_query($conexion, "SELECT * FROM directores WHERE usuario = '$user' AND contrasena = '$contrasena' AND clave = '$clave'");
                    mysqli_close($conexion);
                    $resultado_director = mysqli_num_rows($query_director);
                    if ($resultado_director > 0) {
                        $dato_director = mysqli_fetch_array($query_director);
                        $_SESSION['active'] = true;
                        $_SESSION['rol'] = 4;
                        $_SESSION['idUser'] = $dato_director['id_director'];
                        $_SESSION['nombre'] = $dato_director['nombre'];
                        $_SESSION['user'] = $dato_director['usuario'];
                        header('location: director/perfil.php');
                    } else {
                        $alert = '<div style="color: red; margin-left: 80px;" class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrecta
                 </div>';
                        session_destroy();
                    }
                } else if ($rol['rol'] == 5) {
                    $query_adminsecundario = mysqli_query($conexion, "SELECT * FROM admin WHERE usuario = '$user' AND contrasena = '$contrasena' AND clave = '$clave'");
                    mysqli_close($conexion);
                    $resultado_adminsecundario = mysqli_num_rows($query_adminsecundario);
                    if ($resultado_adminsecundario > 0) {
                        $dato_adminsecundario = mysqli_fetch_array($query_adminsecundario);
                        $_SESSION['active'] = true;
                        $_SESSION['rol'] = 4;
                        $_SESSION['idUser'] = $dato_adminsecundario['id_admin'];
                        $_SESSION['nombre'] = $dato_adminsecundario['nombre'];
                        $_SESSION['user'] = $dato_adminsecundario['usuario'];
                        header('location: adminsecundario/dashboard.php');
                    } else {
                        $alert = '<div style="color: red; margin-left: 80px;" class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrecta
                 </div>';
                        session_destroy();
                    }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUTILAB</title>
    <link rel="shortcut icon" href="acciones/img/lgk.png">
    <link rel="stylesheet" href="acciones/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body onload="recuperarDatos()">
    <div class="container" style="margin-top: -25px; margin-left: -50px;">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <!-- Owl-Carousel -->

                    <img src="acciones/img/kouti-02.png" alt="" class="login_img">

                    <!-- /Owl-Carousel -->
                </div>
                <div class="form-box"><br><br>
                    <div class="button-box">
                        <div id="elegir"></div>
                        <button type="button" class="toggle-btn" onclick="Ingresar()">Iniciar sesión</button>
                        <button type="button" class="toggle-btn" onclick="Registrarse()">Registrarse</button>
                    </div>
                    <div class="logop">
                        <img src="acciones/img/koutilab.png" alt="KOUTILAB">
                    </div>
                    <form action="" id="Ingresar" class="input-group" method="POST">
                        <div class="form-group">
                            <br>
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" id="usuario_inicio" name="usuario" class="input-field" placeholder="Nombre de usuario" value="@<?php if (isset($user)) echo $user; ?>" required>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <input type="password" id="contrasena_inicio" name="contrasena" class="input-field password1" value="<?php if (isset($password)) echo $password; ?>" placeholder="Contraseña" required>
                            <span class="fa fa-fw fa-eye password-icon show-password1"></span>

                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <input type="password" id="clave_inicio" name="clave" class="input-field password2" placeholder="Clave de acceso" value="<?php if (isset($clave)) echo $clave; ?>" required>
                            <span class="fa fa-fw fa-eye password-icon show-password2"></span>

                        </div>
                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert">

                        </div>
                        <?php echo isset($alert) ? $alert : ''; ?>

                        <input type="checkbox" id="checkbox" class="check-box" style="scale: 90%;"><span>Recordar contraseña</span>

                        <a href="recuperar-contrasena.php" class="remember">Olvidé mi contraseña</a>

                        <button type="submit" class="submit-btn" style="margin-top: -2px;">Acceder</button>
                    </form>
                    <form action="acciones/registrarse.php" method="POST" id="Registrarse" class="input-group">
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" id="usuario" name="usuario" class="input-field" placeholder="Nombre de usuario" value="@" required>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <input type="password" id="contrasena" name="contrasena" class="input-field password3" placeholder="Contraseña" required>
                            <span class="fa fa-fw fa-eye password-icon show-password3"></span>

                        </div>
                        <div class="form-group" style="margin-bottom: 5px;">
                            <div class="input-icon">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <input type="password" id="clave" name="clave" class="input-field password4" placeholder="Clave" required>
                            <span class="fa fa-fw fa-eye password-icon show-password4"></span>

                        </div> 
                        <input type="checkbox" class="check-box" style="margin-top: 5px; scale: 90%; margin-left: 20px;"><span>Acepto los términos y condiciones</span>
                        <button type="submit" onclick="registroExitoso(); return false;" class="submit-btn" style="margin-top: -2px;">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        //Alerta de registro exitoso
        const form = document.querySelector('#Registrarse');

        form.addEventListener('submit', function(event) {
            Swal.fire({
                title: '¡Excelente!',
                text: 'Registro exitoso',
                icon: 'success',
                showConfirmButton: false,
            });
        });
    </script>

    <script>
        // Guarda los datos del formulario en una cookie
        function guardarDatos() {
            var usuario_inicio = document.getElementById("usuario_inicio").value;
            var contrasena_inicio = document.getElementById("contrasena_inicio").value;
            var clave_inicio = document.getElementById("clave_inicio").value;
            document.cookie = "usuario_inicio=" + usuario_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            document.cookie = "contrasena_inicio=" + contrasena_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            document.cookie = "clave_inicio=" + clave_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        }

        function off() {
            console.log("Reinicio")
            var usuario_inicio = '';
            var contrasena_inicio = '';
            var clave_inicio = '';
            document.cookie = "usuario_inicio=" + usuario_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            document.cookie = "contrasena_inicio=" + contrasena_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
            document.cookie = "clave_inicio=" + clave_inicio + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        }

        var checkbox = document.getElementById('checkbox');

        checkbox.addEventListener("change", comprueba, false);

        // Función para establecer el valor de una cookie
        function setCookie(name, value) {
            document.cookie = `${name}=${value}; path=/;`;
        }

        function comprueba() {
            if (checkbox.checked) {
                guardarDatos();
                setCookie('checkbox', true);
            } else {
                off();
            }
        }
    </script>

    <script>
        // Recupera los datos del formulario de la cookie
        function recuperarDatos() {
            var cookieData = document.cookie;
            if (cookieData) {
                var cookies = cookieData.split("; ");
                for (var i = 0; i < cookies.length; i++) {
                    var parts = cookies[i].split("=");
                    var name = parts[0];
                    var value = decodeURIComponent(parts[1]);
                    if (name == "usuario_inicio") {
                        document.getElementById("usuario_inicio").value = value;
                    } else if (name == "contrasena_inicio") {
                        document.getElementById("contrasena_inicio").value = value;
                    } else if (name == "clave_inicio") {
                        document.getElementById("clave_inicio").value = value;
                    }
                }
            }
        }
    </script>

    <script>
        // Función para obtener el valor de una cookie
        function getCookie(name) {
            const cookieArray = document.cookie.split("; ");
            for (let i = 0; i < cookieArray.length; i++) {
                const cookie = cookieArray[i].split("=");
                if (cookie[0] === name) {
                    return cookie[1];
                }
            }
            return "";
        }
    </script>

    <script>
        // EVITAR REENVIO DE DATOS.
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword1 = document.querySelector('.show-password1');
            showPassword1.addEventListener('click', () => {

                // elementos input de tipo clave
                password1 = document.querySelector('.password1');

                if (password1.type === "text") {
                    password1.type = "password"
                    showPassword1.classList.remove('fa-eye-slash');
                } else {
                    password1.type = "text"
                    showPassword1.classList.toggle("fa-eye-slash");
                }

            })

        });
    </script>
    <script>
        window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword2 = document.querySelector('.show-password2');
            showPassword2.addEventListener('click', () => {

                // elementos input de tipo clave
                password2 = document.querySelector('.password2');

                if (password2.type === "text") {
                    password2.type = "password"
                    showPassword2.classList.remove('fa-eye-slash');
                } else {
                    password2.type = "text"
                    showPassword2.classList.toggle("fa-eye-slash");
                }

            })

        });
    </script>

    <script>
        window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword3 = document.querySelector('.show-password3');
            showPassword3.addEventListener('click', () => {

                // elementos input de tipo clave
                password3 = document.querySelector('.password3');

                if (password3.type === "text") {
                    password3.type = "password"
                    showPassword3.classList.remove('fa-eye-slash');
                } else {
                    password3.type = "text"
                    showPassword3.classList.toggle("fa-eye-slash");
                }

            })

        });
    </script>

    <script>
        window.addEventListener("load", function() {

            // icono para mostrar contraseña
            showPassword4 = document.querySelector('.show-password4');
            showPassword4.addEventListener('click', () => {

                // elementos input de tipo clave
                password4 = document.querySelector('.password4');

                if (password4.type === "text") {
                    password4.type = "password"
                    showPassword4.classList.remove('fa-eye-slash');
                } else {
                    password4.type = "text"
                    showPassword4.classList.toggle("fa-eye-slash");
                }

            })

        });
    </script>

    <script>
        var x = document.getElementById("Ingresar");
        var y = document.getElementById("Registrarse");
        var z = document.getElementById("elegir");

        function Registrarse() {
            x.style.left = "-450px"
            y.style.left = "50px"
            z.style.left = "120px"
        }

        function Ingresar() {
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0px"
        }
    </script>

</body>

</html>