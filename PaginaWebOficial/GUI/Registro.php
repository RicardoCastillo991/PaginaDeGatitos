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
        echo "<script>alert('El nickname o correo electronico ya esta en uso');</script>";
        $_SESSION['error_s'] = null;
    }
    if(isset($_SESSION['error_PDO'])){
        echo "<script>alert('Hubo algún problema con la conexión de la base de datos');</script>";
        $_SESSION['error_PDO'] = null;
    }
?>
    <!-- uso de header para implementar logo de página web mediante el elemento <p> y la clase "logo" -->
    <header>
        <div class="container">
            <p class="logo">ElMundoDeLosGatos</p>
        </div>
    </header>
    <!-- uso de section para agrupar clases y elementos que contendrá el formulario (form) para el registro de datos, 
    h1 para titulo principal -->
        <section id="registro">
            <form action="../../PaginaWebOficial/CTL/registro.php" method="post" >
                <h1> KITTIES BLOG </h1>
                <h2 >Bienvenid@ a Registro</h2>
                <br>
                <div class="container--flex">
                    <label for="">Nickname </label> 
                    <input type="text" class="form__input" name="nickname" placeholder="Ejemplo: Usuario123" required/>
                </div>
                <div>
                    <label for="" >Correo electrónico </label> 
                    <input type="email" class="form__input" name="correo" placeholder="Ejemplo: usuario123@gmail.com" required/>   
                </div>
                <div>
                    <label for="">Contraseña </label> 
                    <input type="password" class="form__input" name="pass" placeholder="Ejemplo: Contraseña123" required/>
                </div>
                <div>
                    <label for="" >Fecha de nacimiento </label> 
                    <input type="date" class="form__input" name="fecha_nacimiento" min="1922-01-01" max="2023-01-01" required/>
                </div>
                <input type="submit" value="Registrarse">
            </form>
            <!-- Uso de botones para la interacción, en este caso para iniciar sesión, volver una pagina atrás o continuar hacia otra -->
            <div id="juntar_botones">
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Signin.php', '_self')">Atrás</button> 
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Index.php', '_self')">continuar en el blog</button>  
                <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Signin.php', '_self')">Iniciar Sesion</button>  
            </div>
        </section>
</body>
</html