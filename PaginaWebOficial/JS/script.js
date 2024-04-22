//uso de referencia mediante document.getElementId(); para que ejecute una funcion al presionar botones de inicio de sesión y registro
//Los parentesis contiene los nombres de las clases que se encuentran en archivo Signin.php los cuales contienen todo lo relacionado con inicio de sesión y registro
document.getElementById("btn-iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn-registro").addEventListener("click", registro);
window.addEventListener("resize", anchoPagina);

//declaracion de variables que permitirá el funcionamiento de las funciones
var contenedor__login_registro = document.querySelector(".contenedor_login_registro");
var formulario__login = document.querySelector(".fomulario_login");
var formulario__signin = document.querySelector(".fomulario_signin");
var caja_trasera__login = document.querySelector(".caja_trasera_login");
var caja__trasera_signin = document.querySelector(".caja_trasera_signin");

// creació de funtion implementando estructura condicional if para determinar la ejecucion de responsive design que en este caso seria el ancho de la pagina

function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera__login.style.display = "block";
        caja__trasera_signin.style.display = "block";
    } else{
        caja__trasera_signin.style.display = "block";
        caja__trasera_signin.style.opacity = "1";
        caja__trasera_signin.style.display = "none";
        formulario__login.style.display = "block";
        formulario__signin.style.display = "none";
        contenedor__login_registro.style.left = "0px";
    }
}

anchoPagina();

// Creación de funtion utilizando estructura condicional if para la animación de los formularios de inicio de sesión y registro

function iniciarSesion(){

    if(window.innerWidth > 850){
        formulario__signin.style.display = "none";
        contenedor__login_registro.style.left = "10px";
        formulario__login.style.display = "block";
        caja__trasera_signin.style.opacity = "1";
        caja_trasera__login.style.opacity = "0";
    } else{
        formulario__signin.style.display = "none";
        contenedor__login_registro.style.left = "0px";
        formulario__login.style.display = "block";
        caja__trasera_signin.style.display = "block";
        caja_trasera__login.style.display = "none";
    }
    
}

function registro(){
    if(window.innerWidth > 850){
        formulario__signin.style.display = "block";
        contenedor__login_registro.style.left = "410px";
        formulario__login.style.display = "none";
        caja__trasera_signin.style.opacity = "0";
        caja_trasera__login.style.opacity = "1";
    } else{
        formulario__signin.style.display = "block";
        contenedor__login_registro.style.left = "0px";
        formulario__login.style.display = "none";
        caja__trasera_signin.style.display = "none";
        caja_trasera__login.style.display = "block";
        caja_trasera__login.style.opacity = "1";
    }
}