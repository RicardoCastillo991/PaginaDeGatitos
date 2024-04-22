<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Gatitos</title>
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/index_interfaz.css">
</head>
<body>
<?php
    if(isset($_SESSION['error_s'])){
        echo "<script>alert('Necesitas iniciar sesion o registrarte para ir al blog.');</script>";
        $_SESSION['error_s'] = null;
    }
    ?>
    <header>
        <div class="container">
            <?php
                include '../../PaginaWebOficial/navegador/navegador.php'
            ?>
        </div>
    </header>
    
    <!-- Implementación de h1 para titulo principal y un button que redirige a página Signin o Inicio sesión -->
    <section id="hero">
        <h1>¡Es hora de <br> unos datos curiosos!</h1>
           <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Signin.php', '_self')">COMENZAR</button> 
    </section>
<!-- uso de div y class para organizar section Curiosidades e implementación de etiqueta h3 para definir titulos de subsecciones 
     y button para redirigir a página Datos -->
    <section id="Curiosidades">
        <div class="container">
             <div class="categorias">
                <div class="tarjetas">
                    <h3>Lenguaje y comunicación de los gatos</h3>
                    <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Datos.php', '_self')">+ Info</button>
                </div>
                <div class="tarjetas">
                    <h3>Razas de gatos más populares</h3>
                    <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Datos.php', '_self')">+ Info</button>
                </div>
                <div class="tarjetas">
                    <h3>Comportamientos gatunos</h3>
                    <button type="button" onclick="window.open('../../PaginaWebOficial/GUI/Datos.php', '_self')">+ Info</button>
                </div>
            </div>
        </div>
        
    </section>        
<!-- uso de footer para pie de página -->
    <footer class="container">
        <div>
            <p>&copy; ElMundoDeLosGatos</p>
        </div>
    </footer>
    <script>
        (function ($) {
        var timeout;
        $(document).on('mousemove', function (event) {
                if (timeout !== undefined) {
                    window.clearTimeout(timeout);
                }
                timeout = window.setTimeout(function () {
                    //Creas una funcion nueva para jquery 
                    $(event.target).trigger('mousemoveend');
                }, 5000); //determinas el tiempo en milisegundo aqui 5 segundos
            });
        }(jQuery));

        $(document).on('mousemoveend', function () { //agregas la nueva funcion creada, puede ser una clase o un id
            alert("mouse detenido");
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>