<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accests/css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo"> <!--Va hacer el contenedor de todo-->
            <div class="caja__trasera"> <!--contener azul de fondo del login-->
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para iniciar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
 
            <!--FORMULARIO DE LOGIN Y REGISTER-->
            <div class="contenedor__login-register">                <!--Caja de inicio de sesion-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico"></br></br>
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" class="formulario__register" method="POST">    <!--Caja de registro-->
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre_completo" placeholder="Nombre Completo">
                    <input type="text" name="correo" placeholder="Correo Electrónico">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="accests/js/script.js"></script>
    
</body>
</html>