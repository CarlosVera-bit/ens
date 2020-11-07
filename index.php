<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/estilo.css">

    <title>Document</title>
</head>

<body>
    
    <?php 
        require_once 'includes/nav.php';
    ?>


    <!--CARRUSEL-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/01 (2).jpg" class="d-block w-100 img-tam" alt="...">
                <div class="carousel-caption d-block d-md-block info">
                    <h4>Desarrollo de proyectos académicos tanto de redes, programación, wireless y más...</h4>
                    <hr>
                    <a class="enlace" href="https://api.whatsapp.com/send?phone=593963352117&text=Hola,+Contactanos+ENS+EnterpriseNetworkSolutions" target="_blank">
                        <img src="img/whatsapp.png" alt="">
                        Contactanos
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/02 (2).jpg" class="d-block w-100 img-tam" alt="...">
                <div class="carousel-caption d-block d-md-block info">
                    <h3>Consultoria</h3>
                    <hr>
                    <p>Indicanos tus dudas referentes a tus proyectos academicos....</p>
                    <a class="enlace" href="https://api.whatsapp.com/send?phone=593963352117&text=Hola,+Contactanos+ENS+EnterpriseNetworkSolutions" target="_blank">
                        <img src="img/whatsapp.png" alt="">
                        Contactanos
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/03 (2).jpg" class="d-block w-100 img-tam" alt="...">
                <div class="carousel-caption d-block d-md-block info">
                    <h3>Cotizacion</h3>
                    <hr>
                    <p>Comunicate y cotiza con nosotros para el desarrollo de tus proyectos</p>
                    <a class="enlace" href="https://api.whatsapp.com/send?phone=593963352117&text=Hola,+Contactanos+ENS+EnterpriseNetworkSolutions" target="_blank">
                        <img src="img/whatsapp.png" alt="">
                        Contactanos
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--FIN CARRUSEL-->

  
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12 col-md-12 mt-3">
                <h1 class="titulo">Enterprise Network Solutions</h1>
                <hr>
            </div>
        </div>
    </div>
    <!--SECCION DE INFORMACION DE TRABAJOS-->
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Colsultoria</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary btn-hover">Ver mas...</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Redes -Wirelles</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Proyectos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN INFORMACION DE TRABAJOS-->

    <!--SECCION DE INFORMACION DE TRABAJOS 2-->
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Seguridades Informatica</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Instalacion de Camaras de Seguridad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-1-12 col-md-4 mt-3">
                <div class="card">
                    <img src="img/info-06.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo Web</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN INFORMACION DE TRABAJOS-->

    <!--FOOTER-->
    <div class="footer-top">
        <div class="container">
        <div class="row">
            <div class="col-xs-1-12 col-md-4 mt-4">
                <h3>Enterprise Network Solutions</h3>
                <img src="img/logo.png" alt="imagen del logo" style="width: 120px;">
            </div>
            <div class="col-xs-1-12 col-md-4 mt-4">
                <h4>Contactanos</h4>
                <p> Correo: enterprise@ens.com</p>
                <hr>
                <p> Telefono: 24532 - 0967345214</p>
            </div>
            <div class="col-xs-1-12 col-md-4 mt-4">
                <h4>Nosotros</h4>
                <a href="https://www.facebook.com/EnterpriseNetworkSolution" target="_blank">
                 <p><img src="img/facebook.png" alt="">   Facebook</p> 
                </a>
                <hr>
                <p style="padding-left: 15px;">Proyectos</p>
                <hr>
                <p style="padding-left: 15px;">Informacion</p>
            </div>
        </div>
        </div>   
    </div>
    <div class="footer-bottom">
        Copyright © 2020, All Rights Reserved
    </div>
    <!--FOOTER-->
    <!--FIN FOOTER-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>