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
            <div class="col-sm-4 px-4 py-4">
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
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-proyectos">
                            <a href="#">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Seccion 2-->
            <div class="col-sm-4  px-4 py-4">
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
            <div class="col-sm-4  px-4 py-4">
                <div class="row card">
                    <div class="col-12 p-0 integrador">
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
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
           
            <div class="col-sm-3 col-12 text-sm-start text-center">
                <a href="https://github.com/Marcos-mi" target="_blank" title="Github"><i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/marcos-mi%C3%B1o-1228a8213/" target="_blank" title="Linkedin"><i
                class="fab fa-linkedin-in"></i></i></a>
            </div>
            <div class="col-sm-3 col-12 text-center">
                Sponsor: <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePc Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-center">
               <a href="mailto:marcosminof22@gmail.com">marcosminof22@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp ">
        <a href="https://api.whatsapp.com/send?phone=541164410033"   target="_blank" title="Whatsapp" ><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>