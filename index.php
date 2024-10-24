<?php

error_reporting(0);

include 'todo/config/conecta.php';

if (isset($_POST['button'])) { 
$ruser = $conecta->real_escape_string ($_POST['username']);
$rpass = $conecta->real_escape_string (md5($_POST['password']));

$consulta = "SELECT * FROM usuario WHERE usuario= '$ruser' and clave = '$rpass'";

if($resultado=$conecta->query($consulta)){
    while($row= $resultado->fetch_array()){
        $userok=$row['usuario'];
        $passok=$row['clave'];
    }
    $resultado->close();
}
$conecta->close();
if(isset($ruser)&& isset ($rpass)){
    if($ruser == $userok && $rpass == $passok){
        $_SESSION['login']= TRUE;
        $_SESSION['usuario']= $usuario;
        header("location:inicio.php");
    }
}
else{ $mensaje.=  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Cagaste </strong> Quien Chotas eres.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso y Registro del SI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="login/assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Posees una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no estas registrado?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                    <h2>Bienvenido</h2>
                    <div class="form-group col-lg-15">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" autocomplete="off" class="form-control" required>
                    <br>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <br>
                    <button type="submit" name= "button" class="btn btn-primary">Ingresar</button>
                    </div>
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                    <script>
                        document.getElementById('loginForm').addEventListener('submit', function() {
                        document.getElementById('username').value = '';
                });
            </script>
                </div>
            </div>

        </main>

        <script src="login/assets/js/script.js"></script>
</body>
</html>
