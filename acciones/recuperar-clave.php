<?php
include('conexion.php');

//Generando clave aleatoria
$logitudPass = 4;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);
$clave1 = $miPassword;
$clave       = md5($miPassword);

$correo             = trim($_REQUEST['email']);
$consulta           = ("SELECT * FROM alumnos WHERE email ='".$correo."'");
$queryconsulta      = mysqli_query($conexion, $consulta);
$cantidadConsulta   = mysqli_num_rows($queryconsulta);
$dataConsulta       = mysqli_fetch_array($queryconsulta);

$consulta1          = ("SELECT * FROM docentes WHERE email ='".$correo."'");
$queryconsulta1      = mysqli_query($conexion, $consulta1);
$cantidadConsulta1   = mysqli_num_rows($queryconsulta1);
$dataConsulta1       = mysqli_fetch_array($queryconsulta1);

if ($cantidadConsulta) {
    if($cantidadConsulta ==0){ 
        header("Location:../login.php");
        exit();
    }else{
    $updateClave    = ("UPDATE alumnos SET contrasena='$clave' WHERE email='".$correo."' ");
    $queryResult    = mysqli_query($conexion, $updateClave); 
    
    $destinatario = $correo; 
    $asunto       = "Recuperación de clave";
    $cuerpo = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <title>Recuperar clave de usuario</title>';
    $cuerpo .= ' 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: 300;
            color: #888;
            background-color:rgba(230, 225, 225, 0.5);
            line-height: 30px;
            text-align: center;
        }
        .contenedor{
            width: 80%;
            min-height:auto;
            text-align: center;
            margin: 0 auto;
            background: #ececec;
            border-top: 3px solid #E64A19;
        }
        .btnlink{
            padding:15px 30px;
            text-align:center;
            background-color:#cecece;
            color: crimson !important;
            font-weight: 600;
            text-decoration: blue;
        }
        .btnlink:hover{
            color: #fff !important;
        }
        .imgBanner{
            width:100%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding:0px;
        }
        .misection{
            color: #34495e;
            margin: 4% 10% 2%;
            text-align: center;
            font-family: sans-serif;
        }
        .mt-5{
            margin-top:50px;
        }
        .mb-5{
            margin-bottom:50px;
        }
        </style>
    ';
    
    $cuerpo .= '
    </head>
    <body>
        <div class="contenedor">
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="background-color: #ffffff;">
                <div class="misection">
                    <h2 style="color: red; margin: 0 0 7px">Hola, '.$dataConsulta['nombre'].'</h2>
                    <p style="margin: 2px; font-size: 18px">te hemos creado una nueva clave temporal para que puedas iniciar sesión, la clave temporal es: <strong>'.$clave1.'</strong> y tu usuario es: <strong> '.$dataConsulta['usuario'].'</strong> <br><br> Por si lo llegas a ocupar, tu clave de acceso es: <strong> '.$dataConsulta['clave'].'</strong></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </td>
        </tr>
        </table>'; 
    
    $cuerpo .= '
        </div>
    </body>
    </html>';
        
        $headers  = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $headers .= "From: Koutilab\r\n"; 
        $headers .= "Reply-To: "; 
        $headers .= "Return-path:"; 
        $headers .= "Cc:"; 
        $headers .= "Bcc:"; 
        (mail($destinatario,$asunto,$cuerpo,$headers));
    
        header("Location:../login.php");
        exit();
    } 
} elseif ($cantidadConsulta1) {
    if($cantidadConsulta1 ==0){ 
        header("Location:../login.php");
        exit();
    }else{
    $updateClave1    = ("UPDATE docentes SET contrasena='$clave' WHERE email='".$correo."' ");
    $queryResult    = mysqli_query($conexion, $updateClave1); 
    
    $destinatario = $correo; 
    $asunto       = "Recuperación de clave";
    $cuerpo = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <title>Recuperar clave de usuario</title>';
    $cuerpo .= ' 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: 300;
            color: #888;
            background-color:rgba(230, 225, 225, 0.5);
            line-height: 30px;
            text-align: center;
        }
        .contenedor{
            width: 80%;
            min-height:auto;
            text-align: center;
            margin: 0 auto;
            background: #ececec;
            border-top: 3px solid #E64A19;
        }
        .btnlink{
            padding:15px 30px;
            text-align:center;
            background-color:#cecece;
            color: crimson !important;
            font-weight: 600;
            text-decoration: blue;
        }
        .btnlink:hover{
            color: #fff !important;
        }
        .imgBanner{
            width:100%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding:0px;
        }
        .misection{
            color: #34495e;
            margin: 4% 10% 2%;
            text-align: center;
            font-family: sans-serif;
        }
        .mt-5{
            margin-top:50px;
        }
        .mb-5{
            margin-bottom:50px;
        }
        </style>
    ';
    
    $cuerpo .= '
    </head>
    <body>
        <div class="contenedor">
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="background-color: #ffffff;">
                <div class="misection">
                    <h2 style="color: red; margin: 0 0 7px">Hola, '.$dataConsulta1['nombre'].'</h2>
                    <p style="margin: 2px; font-size: 18px">te hemos creado una nueva clave temporal para que puedas iniciar sesión, la clave temporal es: <strong>'.$clave1.'</strong> y tu usuario es: <strong> '.$dataConsulta1['usuario'].'</strong> <br><br> Por si lo llegas a ocupar, tu clave de acceso es: <strong> '.$dataConsulta1['clave'].'</strong> </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </td>
        </tr>
        </table>'; 
    
    $cuerpo .= '
        </div>
    </body>
    </html>';
        
        $headers  = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $headers .= "From: Koutilab\r\n"; 
        $headers .= "Reply-To: "; 
        $headers .= "Return-path:"; 
        $headers .= "Cc:"; 
        $headers .= "Bcc:"; 
        (mail($destinatario,$asunto,$cuerpo,$headers));
    
        header("Location:../login.php");
        exit();
    } 
}



?>