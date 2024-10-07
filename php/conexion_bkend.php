<?php

    $conexion = mysqli_connect("localhost", "root", "", "nueva_tabla",);

    if($conexion){
        echo 'CONECTADO EXITOSAMENTE A LA BASE DE DATOS';
    }else{
        echo 'NO SE PUDO CONECTAR A LA BASE DE DATOS';
    }

?>