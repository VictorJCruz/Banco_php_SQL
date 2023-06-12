<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';

?>

<!DOCTYPE html>

<head>
    <?php
        headerSite();
    ?>
</head>

<body>

    <?php
        navBar();
    ?>

    <?php
        ValidarOpcionesMenu();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> </li>
                <li><a href="inicio.php">Inicio</a></li>
            </ol>

            <div class="templatemo-panels">

                <div class="row">
                    <div class="col-md-12">
                
                    <div class="btn-group pull-right"> 
                        <a href="agregarUsuario.php"><button type="button" class="btn btn-info">Añadir Usuario</button></a>
                    </div>
                    
                    <br/><br/><br/>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Tipo de Usuario</th>
                                <th>Tipo de Cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ListarUsuarios();
                            ?>
                        </tbody>
                    </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
        modal();
    ?>

<footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo" <img src="" alt="">
                </div>
                <div class="terms">
                    <p>El Banco es una entidad bancaria estatal de índole comercial que
                        opera en Costa Rica. Con un patrimonio de ¢253,574,654,782
                        y activos por ¢5,278,383,864,857, el banco se ha constituido como una de las más
                        sólidas empresas bancarias de Costa Rica y de la región centroamericana.​</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Servicios Adicionales</h2>
                <a href="#">Desarrollo</a>
                <a href="#">Marketing</a>
                <a href="#">IOS</a>
                <a href="#">Android</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-square-twitter"></i>Twitter</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados @ 2022
                <b>Ambiente web C//S
            </p>
        </div>
    </footer>
    <!-- Fin del Footer -->
    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>