<?php
require_once("UserNegocio.php");
//Se van a recibir los datos que se ingresaron
$correo = $_POST['correoSI'];
$pass = $_POST['passSI'];

//Se va a tomar los valores por post y se genera un objeto al que se llama las funciones.
try{
    $obj = new UserNegocio();
    $obj->inicioSesion($correo, $pass);
}
catch(PDOException $e){
    $_SESSION['error_PDO'] = true;
    header('Location: ../../PaginaWebOficial/GUI/signin.php');
}

