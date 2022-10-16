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
                    <h1 class="pt-sm-4 pt-0 mb-sm-2">Sobre mí</h1>
                    <p class="pb-2">Apasionado por la tecnología. Soy estudiante de
                        programación Full Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn text-white">Enviar Mensaje</a>
                </div>
                <div class="col-sm-5 col-12 mt-sm-0 mt-5">
                    <img src="images/marcosmi.png" alt="Marcos Miño" class="mi-foto img-fluid">
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
                        <img class="img-fluid mx-auto" width="90" src="images/react.png" alt="React.js">
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
<!--                 <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1">
                        <h3>Apache</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Apache.png" alt="Apache">
                    </div>
                </div> -->
<!--                 <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>Mercadopago</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Mercadopago.jpg" alt="Mercadopago">
                    </div>
                </div> -->
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>Node.Js</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Node.js_logo.png" alt="Node js">
                    </div>
                </div>
               <!--  <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>Angular</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Angular_logo.png" alt="Angular">
                    </div>
                </div> -->
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>GitHub</h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/github.png" alt="GITHUB">
                    </div>
                </div>
                <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>MongoDB</h3>
                        <img class="img-fluid  mx-auto" width="90" src="images/MongoDB_Logo.svg.png" alt="MongoDB">
                    </div>
                </div>
<!--                 <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>SASS</h3></h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Sass_Logo.png" alt="SASS">
                    </div>
                </div> -->
                <!-- <div class="col-sm-2 col-6 text-center">
                    <div class="px-4 py-5 card mx-0 mb-4 mb-sm-1 ">
                        <h3>Canva</h3></h3>
                        <img class="img-fluid  mx-auto" width="60" src="images/Canva-logo-500x281.png" alt="Canva">
                    </div>
                </div> -->
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
                    <div class="col-2 p-2 my-auto d-none d-sm-block">
                        <img src="images/servicio-tecnico.jpg" alt="sin logo" class="img-fluid">
                    </div>
                    <div class="col-10 p-3 pt-4">
                        <h3>Técnico</h3>
                        <h4>Servicio tecnico de celulares/tablet/pc</h4>
                        <h5>(Noviembre) 2018 - (Julio) 2021</h5>
                        <p>Reparacion de Hardware y  software.
                            Carga de  diferentes sistemas operativos, reparación de errores del  Software, arreglo del hardware/armado.
                        </p>
                    </div>
            </div>
        </section>
        <section class="container" id="formacion">

            <div class="row">
                <div class="col-12 pt-5 pb-4">
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
                        <a  class="text-decoration-none text-dark" href="https://escuelas.guiabbb.com.ar/0196919/Escuela_Media_13_Cecilia_Grierson_(Oficial)">Escuela Media 13 Cecilia Grierson</a>
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
                    <div class="col-sm-2 p-5 my-auto gris  d-none d-sm-block">
                        <img src="images/logo-depcsuite.svg" alt="DePcSuite SA" class="img-fluid">
                    </div>
                    <div class="col-sm-4 col-12 p-3">
                        <h3>Programación Web Full Stack</h3>
                        <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" class="text-decoration-none"><h4><i class="fa-solid fa-square-up-right"></i>  DEPCSUITE SA</h4></a>
                        <h5 class="descripcion">Capacitación  de 5 meses. Habilidades técnicas: (HTML, CSS, JavaScript,PHP,SQL, con MySQL/MariaDB,laravel,React,JQuery,
                            API Mercado Pago,Apache.) - 100hs</h5>
                        <h5>Inicio: (Mayo) 2022 - Actualidad</h5>
                    </div>
                    <div class="col-sm-2 p-2 my-auto gris  d-none d-sm-block">
                        <img src="images/logo-it.jpg" alt="Educacion IT" class="img-fluid">
                    </div>
                    <div class="col-sm-4 col-12 p-3">
                        <h3>Programación Web Full Stack</h3>
                        <a href="https://www.educacionit.com/" target="_blank" class="text-decoration-none"><h4><i class="fa-solid fa-square-up-right"></i>  EDUCACIÓN IT</h4></a>
                        <a href="https://www.educacionit.com/perfil/marcos-mino-811405/" target="_blank" class="text-decoration-none"><h4><i class="fa-solid fa-square-up-right"></i> Ver certificados</h4></a>
                        <h5 class="descripcion">Capacitación laboral de 6 meses, patrocinado por JP Morgan Chase en  EducaciónIT. Habilidades técnicas: (HTML, CSS, JavaScript, Node.js, MongoDB, React.js) - 172hs tecnico y competencias interpersonales - 128 hs</h5>
                        <h5>Inicio: (Abril) 2022 - Expedición: (Octubre) 2022</h5>                   
                     </div>

                     <div class="col-sm-2 p-4 my-auto  bg-secondary d-none d-sm-block">
                        <img src="images/logoferpag.png" alt="devTalles" class="img-fluid">
                    </div>
                    <div class="col-sm-4  col-12 p-3">
                        <h3>JavaScript Moderno: Guía para dominar el lenguaje</h3>
                        <a href="https://fernando-herrera.com/#/" target="_blank" class="text-decoration-none"><h4> <i class="fa-solid fa-square-up-right"></i> Fernando Herrera - DevTalles</h4></a>
                        <a href="#" target="_blank" class="text-decoration-none"><h4><i class="fa-solid fa-square-up-right"></i> Ver certificado</h4></a>
                        <h5>Inicio: (Octubre) 2022 - Finalizado</h5>                   
                    </div> 
            </div>
        </section>
        <!-- <section id="idiomas">
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
        </section> -->
    </main>
    <?php include_once"footer.php" ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>