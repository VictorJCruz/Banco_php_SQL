<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basico -->

<head>
    <?php
    links();
    ?>
</head>

<body>
    <?php
   navBar();
    ?>
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <br><br><br>

            <div class="templatemo-panels">

                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        <h2>Tabla de Citas Registradas</h2>
                        <br/>

                    <table class="table table-bordered" style="background-color: #ffffff;">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ListarCitas();
                            ?>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right"> 
                        <a href="agregarCita.php"><button type="button" class="btn btn-info" style="background-color: #2E468C;">Añadir Cita</button></a>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Inicio Footer -->
    <footer>
        <?php
        fooTer();
        ?>
    </footer>
    <?php
    alllinks();
    ?>
</body>

</html>