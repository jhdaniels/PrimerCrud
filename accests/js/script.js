document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarar unas variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");


function anchoPage(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

anchoPage();

function iniciarSesion(){

    if(window.innerWidth >850){                    //para que el contenedor se ajuste al tamaño de la página
        formulario_register.style.display = "none"; //cuando se le de al botón de registrar se muestre el formulario de registro
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";  //ocultar el texto cuando el contener se desplaza
        caja_trasera_login.style.opacity = "0"; 
    }else{
        formulario_register.style.display = "none"; 
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";  
        caja_trasera_login.style.display = "none"; 

    }
       
}

function register(){

    if(window.innerWidth >850){
        formulario_register.style.display = "block"; //cuando se le de al botón de registrar se muestre el formulario de registro
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";  //ocultar el texto cuando el contener se desplaza
        caja_trasera_login.style.opacity = "1"; 

    }else{
        formulario_register.style.display = "block"; //cuando se le de al botón de registrar se muestre el formulario de registro
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";  //ocultar el texto cuando el contener se desplaza
        caja_trasera_login.style.display = "block"; 
        caja_trasera_login.style.opacity = "1";
    }

}
   
