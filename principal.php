<?php

    session_start();
        if(!isset($_SESSION['usuario'])){
            echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "index.php";
            </script>
            ';
    session_destroy();
    die();
   
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CST - Centro de Servicio Técnico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>CST - Centro de Servicio Técnico</h1>
        <nav>
            <a href="#services">Servicios</a>
            <a href="#products">Productos</a>
            <a href="#contact">NOSOTROS</a>
        </nav>
        <div id="cart">
            <button id="cart-button">🛒 Carrito (<span id="cart-count">0</span>)</button>
            <div id="cart-items"></div>
        </div>
    </header>

    <main>
        <section id="services">
            <h2>Servicios</h2>
            <div class="service">
                <img src="recursos/imges/imgserv.png" alt="Servicio 1">
                <button><h3>SERVICIO DE MANTENIMIENTO</h3></button>
                <p>Realizamos inspecciones, ajustes y reparaciones 
                    preventivas para mantener tus dispositivos en 
                    excelente estado y minimizar tiempos de inactividad. 
                    Confía en nuestros técnicos expertos para garantizar 
                    que tus equipos funcionen de manera eficiente y segura.</p>
                <button class="add-to-cart" data-item="Servicio 1" data-price="100">Añadir al carrito - $100</button>
            </div>
            <div class="service">
                <img src="recursos/imges/imagerep.png" alt="Servicio 2">
                <button><h3>REPARACION DE EQUIPOS</h3></button>
                <p>Contamos con técnicos calificados que diagnostican y
                     reparan una amplia gama de problemas, garantizando 
                     un servicio de alta calidad y una rápida 
                     recuperación de tus equipos.</p>
                <button class="add-to-cart" data-item="Servicio 2" data-price="150">Añadir al carrito - $150</button>
            </div>
            <div class="service">
                <img src="recursos/imges/imgrep.png" alt="Servicio 3">
                <button><h3>MANEJO SEGURO E INDUCCION</h3></button>
                <p>Nuestro programa de enseñanza proporciona conocimientos 
                    esenciales sobre el uso correcto, mantenimiento 
                    preventivo y protocolos de seguridad, reduciendo riesgos 
                    y asegurando un entorno de trabajo seguro y eficiente.</p>
                <button class="add-to-cart" data-item="Servicio 3" data-price="250">Añadir al carrito - $250</button>
            </div>
        </section>

<footer>
        <section id="products">
           <h2>Tambien vendemos equipos</h2>
            <div class="product">
                <img src="recursos/imges/lavadora 1.jpg" alt="Producto 1">
                <button><h3>LAVADORA</h3></button>
                <p>Diseñada para ofrecer una limpieza eficiente y delicada, 
                    combina tecnología avanzada con facilidad de uso. 
                    Disfruta de ciclos rápidos, múltiples programas y 
                    una capacidad adecuada para satisfacer todas tus 
                    necesidades de lavado.</p>
                <button class="add-to-cart" data-item="Producto 1" data-price="200">Añadir al carrito - $200</button>
            </div>



            <div class="product">
                <img src="recursos/imges/nevecon.jpg" alt="Producto 2">
                <button class ="boton2"><h3>NEVECON</h3></button>
                <p>Mantén tus alimentos frescos y congelados 
                    con nuestro nevecon de última generación.
                    Con un diseño eficiente y amplio espacio, 
                    garantiza una congelación uniforme y duradera. 
                    Ideal para almacenar grandes cantidades 
                    de alimentos, su tecnología avanzada 
                    asegura un rendimiento fiable y un ahorro 
                    energético óptimo.</p>
                <button class="add-to-cart" data-item="Producto 2" data-price="250">Añadir al carrito - $250</button>
            </div>

        </section>
</footer>

        <section id="contact">
            <h2>NOSOTROS</h2>
            <p>
            CST es una empresa líder en el sector de servicios técnicos, 
            comprometida con la excelencia y la innovación. En CST, 
            nos especializamos en ofrecer soluciones rápidas y efectivas 
            para todo tipo de necesidades técnicas, desde la reparación y 
            mantenimiento de equipos hasta la asesoría técnica especializada. 
            Nuestro equipo de profesionales altamente capacitados combina 
            experiencia con tecnología de vanguardia para garantizar un servicio de 
            primera calidad. En CST, nos enorgullece nuestra capacidad para resolver 
            problemas de manera eficiente y brindar un soporte continuo, asegurando 
            la satisfacción total de nuestros clientes. Confíe en CST para soluciones 
            técnicas confiables y un servicio excepcional que supera sus expectativas.</p>
            
            <p>Contactenos</p>
            
            <button><p><a href = "https://www.google.com">Correo electrónico: cst@serviciotec.com</a></p></button>
            
            <button><p>Telefono: 3256578909</p></button>
        </section>
    </main>
    
<footer>
    <button><a href = "php/cerrar_sesion.php">Cerrar Sesion</a></button>
    </footer>

    <script src="script.js"></script>
</body>
</html>