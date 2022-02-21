<?php
    include ("conexion_be.php");   //paso 1: conectarse a la base de datos
    //paso 2: declarar variables con los nombres de los campos
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //paso 3: Se crea una query para que los datos que se obtienes de las variables se guarden en la bd

    $query="INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo','$correo','$usuario','$contrasena')";


    //Paso 4 verificar que no se repita el correo en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){    //con _num_rows verifica SI existe una fila con el mismo correo
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro correo");
                window.location = "..//index.php";
            </script>
        ';
        exit();

    }

    //Paso 4 verificar que no se repita el usuario en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){    //con _num_rows verifica SI existe una fila con el mismo correo
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro usuario");
                window.location = "..//index.php";
            </script>
        ';
        exit();

    }

    //paso 5: se ejecuta la variable query para que almacene los datos en la tabla usuarios
    $ejecutar = mysqli_query($conexion, $query); 
   
    if($ejecutar){
        echo '<script> 
                alert("Usuario almacenado exitosamente");
                window.location ="../index.php";
            </script>
        ';
    }else{
        echo '<script> 
                alert("Intenteo nuevamente");
                window.location ="../index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>