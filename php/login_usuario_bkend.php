<?php 

session_start();

include 'conexion_bkend.php';

$correo = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo'
and contraseña = '$contraseña_hash'" );

if(mysqli_num_rows($validar_login) > 0){
   $_SESSION['usuario'] = $correo;
    header("location: ../principal.php");
    exit();
}else{
    echo '
        <script>
            alert("usuario no existe, por favor verifique los datos ingresados");
            window.location = "../index.php";
            </script>
        ';
    exit();
}

?>