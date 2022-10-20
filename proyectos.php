<?php 
$pg= "proyectos";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body id="proyectos" class="d-flex flex-column h-100 container">
    <header class="container">
        <?php include_once"menu.php"?>
    </header>
    <!--main container principal-->
    <main class="container">
        <div class="row">
            <div class="col-12 pt-2 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <!--Seccion 1-->
        <div class="row ">
            <div class="col-sm-6 col-lg-4 px-4 py-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a target="_blank" href="abmclientes/index.php" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a target="_blank" href="https://github.com/Marcos-mi/php/tree/main/abmclientes">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seccion 2-->
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="Sistema de gestion de ventas" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Sistema de gestion de ventas</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seccion 3-->
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Proyecto integrador</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/registrar.jpg" alt="Red social para desarrolladores" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Devstagram</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript,  HTML, CSS,Alpine.Js,Livewire,mvc, MySQL,docker,  gestion de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos"> 
                            <a href="https://github.com/Marcos-mi/Devstagram" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seccion 4-->
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12  integrador">
                        <img src="images/logo-v.4.3.png" alt="Proyecto integrador fundacion pescar" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Encontra tu farmacia</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en Javascript, MongoDB, NodeJs, SASS,BOOTSTRAP ,HTML5, CSS3.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="https://www.encontratufarmacia.site/" class="btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="https://github.com/Marcos-mi/Zona-farm" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12  integrador">
                        <img src="images/administradordetareasv2.png" alt="Proyecto para administrar tareas" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Administrador de tareas</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto desarrollado en Javascript, BOOTSTRAP ,HTML5, CSS3, WEBPACK,POO,Modulos Node.Js.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="https://marcos-mi.github.io/App-tareas/" class="btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="https://github.com/Marcos-mi/App-tareas" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12  integrador">
                        <img src="images/blackjack2.png" alt="Proyecto juego de blackjack" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente">
                        <h2>Juego BlackJack</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto desarrollado en Javascript, BOOTSTRAP ,HTML5, CSS3.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="https://marcos-mi.github.io/blackjack/" class="btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="https://github.com/Marcos-mi/blackjack" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php include_once"footer.php" ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>