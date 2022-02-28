<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayabio</title>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

    <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>-->

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <nav>
            <a ><img class="logo" src="img/MAYABIO.png" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="index.php">Inicio</a></li>
                <!--<li><a href="#">Servicios</a></li>-->
                <li><a href="login.php">Inicio Sesión</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>

            <button class="ham" type="button">   
                <span class="br-1"></span>
                <span class="br-2"></span>
                <span class="br-3"></span>
            </button>                       
        </nav>
    </header>

    <section id="mapa">
    <div class="row about-containerrr">
        <div class="col-lg-8 content order-lg-1 order-2">
            <div class="map mb-4 mb-lg-0">
                <iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3813.8846107096347!2d-96.71403178558569!3d17.078295988264504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c71f640d37121d%3A0xa702a6581a10fbe5!2sMAYABIO!5e0!3m2!1ses!2smx!4v1634234732680!5m2!1ses!2smx" width="650" height="500" style="border:0;"  loading="lazy"></iframe>
            </div>
        </div>
    </div>

    </section>

    <!--<nav>
        <label class="logo">Desingx</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">inicio sesion</a></li>
            <li><a href="registro.php">registro</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>-->


    <!--<div class="container">
        <nav class="nav-main">
            <img src="img/MAYABIO.png" alt="Logo" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="historia.html">productos</a>
                </li>
                <li>
                    <!--<a href="mostrarUsu.php">Productos</a>
                </li>  
                
            </ul>
            <ul class="nav-menu-right">
                <li>
                    <a href="#">
                        <form action="login_registrar.php" method="POST">
                        <a class="ingresa" href="login.php">Iniciar Sesión</a>
                        <a class="crea" href="registro.php">Crea tu cuenta</a>
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <hr>
    </div>-->
        <footer>
            <div class="container-footer-all">
                <div class="container-body">
                    <div class="colum1">
                        <h1>Mas informacion de la compania</h1>
                        <p>Somos un organismo competente independiente imparcial para la certificación de productos orgánicos y ecológicos</p>
                    </div>
                    <div class="colum2">
                        <h1>Redes sociales</h1>
                        <div class="row">
                            <img src="img/facebook.png">
                            <label>Siguenos en facebook</label>  
                        </div>
                        <div class="row">
                            <img src="img/twitter.png">
                            <label>Siguenos en twiterr</label>  
                        </div>
                        <!--<div class="row">
                            <img src="img/instagram.png">
                            <label>Siguenos en instagram</label>  
                        </div>-->
                        <div class="row">
                            <img src="img/google.png">
                            <label>Siguenos en google</label>  
                        </div>
                        <!--<div class="row">
                            <img src="img/pinterest.png">
                            <label>Siguenos en pinteres</label>  
                        </div>-->
                    </div>
                    <div class="colum3">
                        <h1>Informacion Contacto</h1>
                        <div class="row2">
                            <img src="img/casa.png">
                            <label>Mayacert México SC, Heroica Escuela Naval Militar, Núm. ext. 621, Núm. int.
                            303, Colonia Reforma, CP. 68050, Oaxaca de Juárez, Oaxaca.</label>
                        </div>
                        <div class="row2">
                            <img src="img/Phone.png">
                            <label>9515229667/9512016998</label>
                        </div>
                        <div class="row2">
                            <img src="img/Email.png">
                            <label>info@maya.bio</label>
                        </div>
                    </div>
                </div>
            
                <div class="container-footer">
                    <div class="footer">
                        <div class="copyright">
                        © 2021 Todos los derechos reservados |<a href="#"> Mayabio</a>
                        </div>
                        <div class="information">
                            <a href="">Informacion compañia</a> | <a href="">Privacion y politica</a> | <a href="">Terminos y condiciones</a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <script src="main.js"></script>
</body>
</html>