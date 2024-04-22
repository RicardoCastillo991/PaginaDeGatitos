<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estas de abajo definen una hoja de estilos preferida o alternativa -->
    <!-- Este atributo es usado para definir el tipo de contenido al que se enlaza -->
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/datos_interfaz.css">
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/tiposDeRaza.css">
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/tiposDeSonido.css">
    <script scr="JS/scrollreveal.js"></script>

    <title>Datos</title>
</head>
<body>
    <div id="wrapped" class="centrar">
        <!-- el de arriba gracias al wrapped tendra un diseño dentro de ciertos límites -->
        <!-- Las diversas áreas de un diseño no pueden escapar de los límites establecidos por el envoltorio -->
        <header>
            <div class="container">
            <!-- El contenedor afectará a todos los elementos dentro del contenedor <div> -->
            <!-- Los contenedores tienen un relleno de 15 píxeles por defecto, que los protege del final de la página y de otros contenedores -->
                <div class="container">
                    <?php
                        include '../../PaginaWebOficial/navegador/navegador.php'
                    ?>
                </div>
            </div>
        </header>
        <div class="container">
            <main>
                <div id=DatoCurioso>
                    <h2 class="titulo2">Datos curiosos:</h2>
                </div>
                <section id="datos-principales">
                    
                    <div class="datos">
                        <p> El gato es uno de los animales más conocidos y distribuidos alrededor de todo el mundo, este por lo general se asocia como una mascota. Lo más probable es que su afinidad con el hombre tendrá alguna relación con el hecho que ya desde hace más de 8 mil años que los gatos se encuentra al lado de los seres humano, haciéndoles compañía o incluso siendo considerados como dioses. Con respecto a sus características, éste es un animal de pequeñas dimensiones, carnívoro y cuyos rasgos característicos son: la cabeza con forma redondeada, lengua áspera, patas cortas, uñas prominentes, bastante filosas y son retráctiles, en la mayoría de las especies el pelaje es abundante y muy suave, las pupilas por su parte se le dilatan para poder ver mejor en la oscuridad. El termino Gato es procedente del vocablo latino cattus, un término que alude a un animal mamífero y forma parte del conjunto de los félidos. Estos felinos son muy faciles de distinguir por sus cualidades, caracteristicas e incluso por sus habitos. Ademas, son los unicos animales que han decidido domesticarse por si solos. A continuacion te mencionaremos 4 curiosidades acerca de ellos: </p>
                        <ol class="datos_curiosos">
                       <!-- ol etiqueta define una lista ordenada. Una lista ordenada puede ser numérica o alfabética -->  
                            <br>        
                            <li> Tienen una flexibilidad y agilidad impresionante, pueden saltar desde más de 3 metros de altura </li>
                            <li> Los gatos pueden rotar sus orejas 180 grados </li>
                            <li> Pueden pasar hasta 14 horas dormidos </li>
                            <li> Debido a su naturaleza nocturna, los gatos suelen ser mucho más hiperactivos en la tarde </li>
                        <!-- La etiqueta <li> se utiliza para definir cada elemento de la lista --> 
                        </ol>  
                    </div>
                </section>
                <section class="portafolio">
                    <!-- section determina qué contenido corresponde a qué parte de un esquema -->
                    <div class="contenedor">
                        <h2 class="titulo2">El lenguaje y comunicación de los gatos se puede representar de la siguiente forma:</h2>

                        <div id="imagen1" class="centrar">
                            <img src="../../PaginaWebOficial/img/1.jpg" alt="">
                        </div>
                        <div class="tablas">
                            <h3 id="tituloRazas">Razas de gatos más populares</h3>
                            <br>
                                <div id="tablaTiposDeRaza" class="centrar">
                                    <?php
                                        include '../../PaginaWebOficial/tablas/tiposDeRaza.php'
                                    ?>
                                </div>
                                <div id="tablaTiposDeSonido" class="centrar">
                                    <?php
                                        include '../../PaginaWebOficial/tablas/tiposDeSonido.php'
                                    ?>
                                </div>
                            </table>   
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script scr=""></script>
</body>
</html>