<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <!-- atributo lang especifica el idioma del texto que contiene un elemento -->
<head>
    <meta charset="UTF-8">
    <!--utf-8 conjunto de caracteres universal, especifica la codificación de caracteres del documento -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- http-equiv X-UA permiten al navegador mostrar las páginas y la compatibilidad del navegador -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- viewport permite configurar cómo debe interpretar una página el navegador web para móviles -->
    <title>Document</title>
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/blog_interfaz.css">
    <!-- describe la relación que mantiene el documento de destino con el documento presente -->
</head>
<body>
    <!-- Se establecera un enganche global para toda la sesión de inicio-->
    <!-- Se compruebara en el header, aquí podras
    alojar cosas como el nombre, usuario, edad, apellido del usuario que se logueo-->
    <!-- En el momento en que mi usuario se loguee
    esta variable podría preguntar si el usuario esta logueado o no 
    y así poder mostrar un contenido específico para cada caso-->
<?php
    if(!isset($_SESSION['user']))
    {
        $_SESSION['error_s'] = true;
        header('Location: ../../PaginaWebOficial/GUI/index.php');
    }
    ?>
    <header>
        <div class="container">
            <?php
                include '../../PaginaWebOficial/navegador/navegador.php'
            ?>
    </header>

    <form name="contacto" class="contact_form" action="Blog.php" method="post">
    <!--Las tablas permiten representar información tabulada en un documento -->
    <!-- Una tabla puede ser considerada, resumidamente, 
    como un grupo de filas donde cada una contiene a un grupo de celdas -->
    <table class="tablasBlog">
        <tr>
            <td style="background-color: hsl(284, 73%, 75%);">
            <label >Registro:</label>
            </td>
        </tr>
        <tr>
            <td>
            <label>Imagen:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="file" name="attach"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="mensaje">!Cuentanos tu kitty histora aquí!:</label>
            </td>
        </tr>
        <tr>
            <td>
                 <textarea name="mensaje" cols="40" rows="6"></textarea>
            </td>
        </tr>
        <tr>
            <td class="enviarBTN">
                <input class="env" type="button" value="Enviar" title="Crea tu publicacion" onclick="verificarCasilla(this.form)">
            </td>
        </tr>
    </table>


    </form>

</body>
