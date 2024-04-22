<?php
//Esta clase interface lleva todas las funciones del modelo de negocio.
interface IConection{
    function registro($nickname, $correo, $fecha_nacimiento, $pass);
    function inicioSesion($correo, $pass);
}