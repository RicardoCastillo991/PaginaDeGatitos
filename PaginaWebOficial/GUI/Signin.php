<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/registro_interfaz.css">
</head>
<body>
    <?php
    if(isset($_SESSION['error_s'])){
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
        $_SESSION['error_s'] = null;
    }
    if(isset($_SESSION['error_PDO'])){
        echo "<script>alert('Hubo algún problema con la conexión de la base de datos');</script>";
        $_SESSION['error_PDO'] = null;
    }
    ?>
    <header>
        <div class="container">
            <p class="logo">ElMundoDeLosGatos</p>
        </div>
    </header>
        <!-- uso de section para agrupar clases y elementos que contendrá el formulario (form) para el inicio de sesión
    con datos previamente guardados, h1 titulo principal y h2 subtitulo que visualizara el cliente -->
    <section id="registro">
            <form action="../../PaginaWebOficial/CTL/signin.php" class="form-register" method="POST" >
                <h1 class="form__title"> KITTIES BLOG </h1>
                <h2 class="form__title">Bienvenid@ Inicia sesión</h2>
                <br>
                <!-- Uso de label y input para permitir que se puedan escribir o ingresar datos y luego se reciban dichos datos-->
                <div class="container--flex">
                    <label for="">Correo electrónico </label> 
                    <input type="email" class="form__input" name="correoSI" placeholder="Ingresa usuario o correo" required/>   
                </div>
                <div>
                    <label for="" >Contraseña </label> 
                    <input type="password" class="form__input" name="passSI" placeholder="Ejemplo: Contraseña123" required/>
                </div>
                <br>
                <div>
                    <input type="submit" value="Iniciar Sesion">
                </div>
            </form>
            <!-- Uso de botones para interacción, en este caso para iniciar sesión, volver una pagina atrás o continuar hacia otra -->
            <div id="juntar_botones">
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Index.php', '_self')">Atrás</button> 
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Datos.php', '_self')">Continuar viendo Datos</button>  
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Registro.php', '_self')">Registrar</button>  
            </div>
        </section>
</body>
</html>