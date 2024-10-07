<!DOCTYPE html>
<html lang="en">
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> INICIAR O REGISTRARSE - FULL EKIPOZ</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilos.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-INICIAR">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-REGISTRARSE">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Has tu registro para entrar en la pagina</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- //formulario para: "iniciar sesion o registrarse" -->
            <div class="contenedor__INICIAR-REGISTRARSE">
            <!-- //iniciar sesion -->
                <form action="php/login_usuario_bkend.php" method = "POST" class = "formulario__INICIAR">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name = "correo_electronico">
                    <input type="password" placeholder="Contraseña" name = "contrasena">
                    <button>Entrar</button>
                </form>
            <!-- registrarse -->
                <form action = "php/registro_usuario_bkend.php" method = "POST" class = "formulario__REGISTRARSE">
                    <h2>Realizar Registro Nuevo Usuario</h2>
                    <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name = "correo_electronico">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="password" placeholder="Crea una Contraseña" name = "contraseña">
                    <button>Registrarse</button>
                </form>
            </div>

        </div>

    </main>
    <script src ="recursos/js/script.js"></script>
</body>
</html>