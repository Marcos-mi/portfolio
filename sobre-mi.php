<?php 
$pg= "sobre-mi";

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 class="pt-sm-4 pt-0 pb-sm-4 pb-sm-2">Sobre mí</h1>
                    <p class="pb-4">Apasionado por la tecnología. Soy estudiante de
                        programación Full Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn text-white">Enviar Mensaje</a>
                </div>
                <div class="col-sm-5 col-12 mt-sm-0 mt-5">
                    <img src="images/marcos.png" alt="Marcos Miño" class="mi-foto img-fluid">
                </div>
            </div>
        </div>

        <section class="color-gradiente mt-5 pb-4">
            <div class="container ">
                <div class="row">
                    <div class="col-12 text-white my-5">
                        <h2>Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                        <h3>Javascript</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/javascript.jpeg" alt="Javascript">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                        <h3>PHP</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/php.jpg" alt="PHP">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                        <h3>HTML5</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/html.png" alt="HTML5">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                        <h3>React.js</h3>
                        <img class="img-fluid mx-auto" width="60" src="images/react.png" alt="React.js">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                        <h3>jQuery</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Jquery.jpg" alt="jQuery">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-4">
                        <h3>Bootstrap</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/bootstrap.png" alt="Bootstrap">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 pb-sm-5">
                        <h3>Laravel</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/laravel.png" alt="Laravel">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 pb-sm-1">
                        <h3>MySQL</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/MySQL.jpg" alt="MySQL">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 pb-sm-1">
                        <h3>CSS</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/css.png" alt="CSS">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 pb-sm-1">
                        <h3>Git</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/git.png" alt="Git">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1">
                        <h3>Apache</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Apache.png" alt="Apache">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>Mercadopago</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Mercadopago.jpg" alt="Mercadopago">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="container" id="experiencia ">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2 class="experiencia-laboral"><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
                <div class="row shadow">
                    <div class="col-2 p-5 my-auto d-none d-sm-block">
                        <img src="images/sin-logo.png" alt="sin logo" class="img-fluid">
                    </div>
                    <div class="col-10 p-3 pt-4">
                        <h3>Técnico</h3>
                        <h4>Marcos cell</h4>
                        <h5>(Noviembre) 2018 - (Julio) 2021</h5>
                        <p>Reparación de hardware y software</p>
                    </div>
                    <div class="col-2 p-5 my-auto  d-none d-sm-block">
                        <img src="images/sin-logo.png" alt="sin logo" class="img-fluid">
                    </div>
                    <div class="col-10 p-3">
                        <h3>Atención al cliente</h3>
                        <h4>Art de limpieza</h4>
                        <h5>(Septiembre) 2021 - (Febrero) 2022</h5>
                        <p>Venta de art de limpieza y reposición de productos.</p>
                    </div>
            </div>
        </section>
        <section class="container" id="formacion">
            <div class="row">
                <div class="col-12 pt-5 pb-4  d-none d-sm-block">
                <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
                <div class="row shadow p-1">
                    <div class="col-2 p-5 my-auto  d-none d-sm-block">
                        <img src="images/secundaria.jpg" alt="sin logo" class="img-fluid">
                    </div>
                    <div class="col-sm-4 col-12 p-3">
                        <h3>Bachiller en economía y administración</h3>
                        <h4>EES N°13</h4>
                        <h5>2015 - 2020</h5>
                        <a class="link-secundario" href="https://escuelas.guiabbb.com.ar/0196919/Escuela_Media_13_Cecilia_Grierson_(Oficial)">Escuela Media 13 Cecilia Grierson</a>
                    </div>
            </div>
        </section>  
        <section class="container mb-5" id="desarrollo"> 
        <div class="row">
                <div class="col-12 pt-5 pb-4">
                <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow p-1">
                    <div class="col-2 p-5 my-auto gris  d-none d-sm-block">
                        <img src="images/logo-depcsuite.svg" alt="DePcSuite SA" class="img-fluid">
                    </div>
                    <div class="col-sm-4 col-12 p-3">
                        <h3>Programación Web Full Stack</h3>
                        <h4>DEPCSUITE SA</h4>
                        <h5>(Mayo) 2022 - Actualidad</h5>
                    </div>
                    <div class="col-2 p-5 my-auto gris  d-none d-sm-blocks">
                        <img src="images/logo-it.jpg" alt="Educacion IT" class="img-fluid">
                    </div>
                    <div class="col-sm-4 col-12 p-3">
                        <h3>Programación Web Full Stack</h3>
                        <h4>Educación IT</h4>
                        <h5>(Abril) 2022 - Actualidad</h5>                    </div>
                    <div class="col-2 p-5 my-auto gris  d-none d-sm-block">
                        <img src="images/udemy.png" alt="sin logo" class="img-fluid">
                    </div>
                    <div class="col-sm-4  col-12 p-3">
                        <h3>Desarrollo Web</h3>
                        <h4>UDEMY-Juan Pablo De la Torre Valdez</h4>
                        <h5>(Febrero) 2022 - Actualidad</h5>                   
                     </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container mb-5">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Técnico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Cocinar</li>
                                    <li>Futbol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-sm-3 col-12 text-center">
                <a href="https://github.com/Marcos-mi" target="_blank" title="Github"><i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/marcos-mi%C3%B1o-1228a8213/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></i></a>
            </div>
            <div class="col-sm-3 col-12 sponsor text-center">
                Sponsor: <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePc Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-center">
                <a href="mailto:marcosminof22@gmail.com">marcosminof22@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541164410033" target="_blank" title="Whatsapp"><i
                class="fa-brands fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>