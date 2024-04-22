<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PaginaWebOficial/CSS/Signin&login_interfaz.css">
    <title>Inicio de sesión y registro</title>
</head>
<body>
    <!-- Uso de etiqueta main para controlar el contenedor de datos-->
    <main>
        <!-- implementación de etiqueta div, h3, p y button que contendrá los datos que podra visualizar el cliente al momento de abrir la página web-->
        <div class="contenedor_todo">
            <div class="caja_trasera">
               <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Iniciar sesión para continuar</p>
                    <button id="btn-iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja_trasera_signin">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>Debe registrarse para iniciar sesión</p>
                    <button id="btn-registro">Registrarse</button>
                </div> 
            </div>
            <!-- uso de div para la creacion de Formularios de registro y inicio de sesión -->
            <div class="contenedor_login_registro">
                <!-- implementación de form, h2, input y button para dar forma a lo que sera el Inicio de sesión-->
                <form action="" class="fomulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--Uso de form, h2, input y button para dar forma a lo que sera el Registro-->
                <form action="" class="fomulario_signin">
                    <h2>Registro</h2>
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>     
        <!---->
    </main>
    <!-- uso de etiqueta script para vincular archivo javascript o script -->
    <script type="text/javascript" src="../../PaginaWebOficial/JS/script.js"></script>
</body>
</html>