<?php
$pg= "contacto";

?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body id="contacto" class="d-flex flex-column h-100 container">
    <header class="container">
       <?php include_once"menu.php" ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que me contactes enviándome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTel" id="txtTel" placeholder="Teléfono/Whatsapp" class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" required minlength="30" maxlength="210" class="form-control"  placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <div class="">
                        <button type="submit"  name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        </main>
        <footer class="container mt-auto pb-4">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <a href="https://github.com/Marcos-mi" target="_blank" title="Github"><i class="fab fa-github"></i>
                    </a>
                <a href="https://www.linkedin.com/in/marcos-mi%C3%B1o-1228a8213/" target="_blank" title="Linkedin"><i
                    class="fab fa-linkedin-in"></i></i></a>
                </div>
                <div class="col-sm-3 col-12 text-center sponsor">
                    Sponsor: <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePc Suite</a>
                </div>
                <div class="col-sm-3 col-12 text-center">
                   <a href="mailto:marcosminof22@gmail.com">marcosminof22@gmail.com</a>
                </div>
            </div>
        </footer>
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541164410033"target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>