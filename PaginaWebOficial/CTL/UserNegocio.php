<?php
session_start();
require_once("../../PaginaWebOficial/DB/Connection.php");
require_once("../../PaginaWebOficial/CTL/IConection.php");
//En esta clase se van a integrar y convertir en funciones todos los modelos de negocios.
class UserNegocio extends Connection implements IConection{

    public function __construct(){  
    }
    //en la funcion registrar se pediran datos enviados por post para registrarse pero primero se va hac er una consulta si las base de datos contiene un correo o nickname 
    //igual que el que registro el usuario.
    public function registro($nickname, $correo, $fecha_nacimiento, $pass){

        try{
            $db = new Connection();
            $statement = $db->connect()->prepare("SELECT id_usuario FROM users WHERE correo LIKE '%$correo%' OR nickname like '%$nickname%'");
            $statement->execute();
            if($statement->rowCount() > 0 )
            {
                $_SESSION['error_s'] = true;
                header('Location: ../../PaginaWebOficial/GUI/Registro.php');
                
            }
            else
            {
                $statement = $db->connect()->prepare("INSERT INTO users (nickname, correo, fecha_nacimiento, pass) 
                                                    VALUE ('$nickname', '$correo', '$fecha_nacimiento', '$pass')");
                $statement->execute();
                $_SESSION['user']= true;
                header('Location: ../../PaginaWebOficial/GUI/Blog.php');
            }
        }
        catch(ERRMODE_EXCEPTION $e){
            echo $e;
        }
    }
    //Esta funcion esta hecha para consultar a la base de datos el inicio de sesion y que los valores que se ingresen sean iguales a los que estan en la base de datos y los verifique.
    public function inicioSesion($correo, $pass){
        try{
            $db = new Connection();
            $statement = $db->connect()->prepare("SELECT id_usuario FROM users WHERE correo = '$correo' AND pass = '$pass'");
            $statement->execute();
            if($statement->fetch()){
                $_SESSION['user']= true;
                header('Location: ../../PaginaWebOficial/GUI/Blog.php');
            }
            else{
                $_SESSION['error_s']= true;
                header('Location: ../../PaginaWebOficial/GUI/Signin.php');
            }
            
        }
        catch(ERRMODE_EXCEPTION $e){
            echo $e;
        }
    }
}