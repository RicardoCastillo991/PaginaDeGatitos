<?php
require_once("UserNegocio.php");
//Se van a recibir los datos que se ingresaron
$nickname = $_POST['nickname'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$pass = $_POST['pass'];

//Se van a recibir los valores para que que al crear un objeto con el modelo de negocio para 
//que se llamen las clases con los datos y regresar un valor por si se puede o no entrar al blog.
try{
    $obj = new UserNegocio();
    $obj->registro($nickname, $correo, $fecha_nacimiento, $pass);
}
catch(PDOException $e){
    $_SESSION['error_PDO'] = true;
    header('Location: ../../PaginaWebOficial/GUI/registro.php');    
}
