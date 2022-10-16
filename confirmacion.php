<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body id="confirmacion" class="d-flex flex-column h-100 container">
    <header class="container">
       <?php include_once"menu.php" ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4">
                <h1>Gracias por contactarte</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Te estaré respondiendo a la brevedad.</p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        </main>
        <?php include_once"footer.php" ?>
        
</body>
</html>