<?php
include_once __DIR__ . '\generales.php';
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
?>

<html>
<!-- Basic -->

<head>
    <?php
    linksInicio();
    ?>
</head>

<body>
    <form role="form" action="" method="post">
        <?php
        navBarInicio();
        ?>
        </header>

        <!-- Inicio del Banner/Carrusel -->
        <div class="ulockd-home-slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="pogoSlider" id="js-main-slider">
                        <div class="pogoSlider-slide" style="background-image: url(images/dinero.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slide_text white_fonts">
                                            <h3 class="carrusel">Banco Digital<br><strong>UF</strong></h3>
                                            <br>
                                            <a class="start_exchange_bt" href="servicios.php">Servicios></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pogoSlider-slide" style="background-image:url(images/monedas.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slide_text white_fonts">
                                            <h3>Banco Digital<br><strong>UF</strong></h3>
                                            <br>
                                            <a class="start_exchange_bt" href="servicios.php">Servicios></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .pogoSlider -->
                </div>
            </div>
        </div>
        <!-- Fin del Banner/Carrusel -->

        <!-- Cuerpo de la pagina/Seccion 1 -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full text_align_right_img">
                            <img src="images/bancofoto.jpg" alt="#" />
                        </div>
                    </div>
                    <div class="col-md-6 layout_padding">
                        <div class="full paddding_left_15">
                            <div class="heading_main text_align_left">
                                <h2><span class="theme_color">Bienvenidos al Banco Digital UF</span></h2>
                            </div>
                        </div>
                        <div class="full paddding_left_15">
                            <p>El Banco Digital UF es un banco destinado especialmente para estudiantes de la Universidad Fidélitas, los cuales van a poder realizar transacciones, pagos, entre otro tipo de servicios los cuales vayan ligados a la misma universidad.</p>
                        </div>
                        <div class="full paddding_left_15">
                            <a class="main_bt" href="acercaDe.php">Leer más></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del Cuerpo de la pagina/Seccion 1 -->

        <!-- Cuerpo de la pagina/Seccion 2 -->
        <div class="section layout_padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span class="theme_color"></span>Servicios</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full services_blog">
                            <img class="img-responsive" src="images/seguridad1.jpg" alt="#" />
                            <h4>Seguridad</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full services_blog">
                            <img class="img-responsive" src="images/appmovil.jpg" alt="#" />
                            <h4>Aplicación móvil</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full services_blog">
                            <img class="img-responsive" src="images/cuenta.jpg" alt="#" />
                            <h4>Cuenta</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="full services_blog">
                            <img class="img-responsive" src="images/soporte.png" alt="#" />
                            <h4>Soporte</h4>
                        </div>
                    </div>
                </div>
                <div class="row margin-top_30">
                    <div class="col-sm-12">
                        <div class="full">
                            <div class="center">
                                <a class="main_bt" href="servicios.php">Más Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Cuerpo de la pagina/Seccion 2 -->

        <!-- Cuerpo de la pagina/Seccion 3 -->
        <div class="section layout_padding padding_top_0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span class="theme_color"></span>Noticias</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="full news_blog">
                            <img class="img-responsive" src="images/euro-vs-dolar.jpg" alt="#" />
                            <div class="overlay"><a class="main_bt transparent" href="#">Ver Más</a></div>
                            <div class="blog_details">
                                <h3>Caída del Euro</h3>
                                <p>El precio del Euro esta incluso pode debajo del dolar, lo cual es alarmante en el continente europeo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="full news_blog">
                            <img class="img-responsive" src="images/estafa.jpg" alt="#" />
                            <div class="overlay"><a class="main_bt transparent" href="#">Ver Más</a></div>
                            <div class="blog_details">
                                <h3>Estafas con criptomonedas</h3>
                                <p>Se han creado nuevos tipos de estafas con las criptomonedas que pueden dejarte los bolsillos vacios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="full news_blog">
                            <img class="img-responsive" src="images/inflacion.jpg" alt="#" />
                            <div class="overlay"><a class="main_bt transparent" href="#">Ver Más</a></div>
                            <div class="blog_details">
                                <h3>Inflación y sus afectaciones</h3>
                                <p>La inflación hace que el colón suba afectando a todos los costarricenses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de Cuerpo de la pagina/Seccion 3 -->

        <!-- Inicio Footer -->
        <footer>
            <?php
            fooTerInicio();
            ?>
        </footer>
        <?php
        allLinksInicio();
        ?>
        <!-- Fin del Footer -->
        <!-- PLUGINS PARA EL CARRUSEL -->
        <script src="js/jquery.pogo-slider.min.js"></script>
        <script src="js/slider-index.js"></script>
</body>

</html>