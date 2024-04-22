<?php
//Esta clase se crea para hacer una conexion con la base de datos con el formato PDO de php
class Connection{
    //Clase constructor de la clase 
    public function __construct()
    {
        $this->host =  'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'db_gatitos';
    }
    //Conexion con la base de datos ingresando el host, nombre de la base de datos y luego el usuario con la contraseña.
    function connect(){
        try{
            $connection = "mysql:host=" .$this->host. ";dbname=" .$this->dbname. ";charset=utf8" ;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        }
        catch(PDOERRMODE_EXCEPTION $e)
        {
            echo('Error connection: ' . $e->getMessage());
        }
    
    }
}