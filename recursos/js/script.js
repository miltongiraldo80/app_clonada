document.getElementById("btn__registrarse").addEventListener("click", REGISTRARSE);
document.getElementById("btn__iniciar-sesion").addEventListener("click", INICIAR);
window.addEventListener("resize", AnchoPagina);

/**Declaracion de variables */
var contenedor__INICIAR_REGISTRARSE = document.querySelector(".contenedor__INICIAR-REGISTRARSE");
var formulario__INICIAR = document.querySelector(".formulario__INICIAR");
var formulario__REGISTRARSE = document.querySelector(".formulario__REGISTRARSE");
var caja__trasera_INICIAR = document.querySelector(".caja__trasera-INICIAR");
var caja__trasera_REGISTRARSE = document.querySelector(".caja__trasera-REGISTRARSE");

function AnchoPagina(){
    if(window.innerWidth > 850){
        caja__trasera_INICIAR.style.display = "block";
        caja__trasera_REGISTRARSE.style.display = "block";
    }else{
        caja__trasera_REGISTRARSE.style.display = "block";
        caja__trasera_REGISTRARSE.style.opacity = "1";
        caja__trasera_INICIAR.style.display = "none";
        formulario__INICIAR.style.display = "block";
        formulario__REGISTRARSE.style.display = "none";
        contenedor__INICIAR_REGISTRARSE.style.left = "0px"
    }
}

AnchoPagina()

function REGISTRARSE(){

    if(window.innerWidth > 850){
        formulario__REGISTRARSE.style.display = "block";
        contenedor__INICIAR_REGISTRARSE.style.left = "410px";
        formulario__INICIAR.style.display = "none";
        caja__trasera_REGISTRARSE.style.opacity = "0";
        caja__trasera_INICIAR.style,opacity = "1";
    }else{
        formulario__REGISTRARSE.style.display = "block";
        contenedor__INICIAR_REGISTRARSE.style.left = "0";
        formulario__INICIAR.style.display = "none";
        caja__trasera_REGISTRARSE.style.display = "none";
        caja__trasera_INICIAR.style,display = "block";
        caja__trasera_INICIAR.style,opacity = "1";
    }
}

function INICIAR(){
    if(window.innerWidth > 850){
        formulario__REGISTRARSE.style.display = "none";
        contenedor__INICIAR_REGISTRARSE.style.left = "410px";
        formulario__INICIAR.style.display = "block";
        caja__trasera_REGISTRARSE.style.opacity = "1";
        caja__trasera_INICIAR.style,opacity = "0";
    }else{
        formulario__REGISTRARSE.style.display = "none";
        contenedor__INICIAR_REGISTRARSE.style.left = "opx";
        formulario__INICIAR.style.display = "block";
        caja__trasera_REGISTRARSE.style.display = "block";
        caja__trasera_INICIAR.style,opacity = "none";
    }   
}