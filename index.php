<?php
$pg= "inicio";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body id="inicio" class="container ">
    <header class="container">
        <?php include_once"menu.php" ?> 
    </header>
    <main class="container">
        <div class="row">
            <div class="col-sm-6 col-12 offset-sm-3 my-5 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" alt="" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4"> 
                <div class="my-4">
                    <p class=" px-3 py-2 ">Bienvenid@ a mi sitio web sobre desarrollo de sistemas</p>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4">
                <a href="proyectos.php" class="btn ">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-auto mt-lg-5 pb-4">
        <div class="row">
            <div class="col-sm-3 col-12 text-sm-start text-center">
                <a href="https://github.com/Marcos-mi" target="_blank" title="Github"><i class="fab fa-github"></i>
                </a>
            <a href="https://www.linkedin.com/in/marcos-mi%C3%B1o-1228a8213/" target="_blank" title="Linkedin"><i
                class="fab fa-linkedin-in"></i></i></a>
            </div>
            <div class="col-sm-3 col-12 text-center">
            <a href="mailto:marcosmino.dev@gmail.com">marcosmino.dev@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541164410033" target="_blank" title="Whatsapp" ><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>