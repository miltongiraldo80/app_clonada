<?php

    include 'conexion_bkend.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo_electronico'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
//encriptamiento de contraseña con la instruccion (hash) y luego el algoritmo ('sha512') */
    $contraseña = hash('sha512', $contraseña);

    $query = "INSERT INTO usuarios(nombre_completo, correo_electronico, usuario, contraseña)
             VALUES ('$nombre_completo', '$correo_electronico', '$usuario', '$contraseña')";

//verificar que el correo no se repita en la base de datos*/

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico' ");

    if(mysqli_num_rows($verificar_correo,) > 0){
        echo '
            <script>
                alert("Este correo ya existe, intente con uno diferente");
                window.location = "../index.php";
            </script>
            ';          
        exit();
    }

    //verificar que el usuario no se repita en la base de datos*/

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya existe, intente con uno diferente");
                window.location = "../index.php";
            </script>
            ';          
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado Exitosamente");
                window.location = "../index.php";
            </script>
            ';      
    }else{
        echo '
        <script>
                alert("Intentalo de nuevo, Usuario no Almacenado");
                window.location = "../index.php";
            </script>
            ';
        }
    // mysqli_close($conexion);
?>