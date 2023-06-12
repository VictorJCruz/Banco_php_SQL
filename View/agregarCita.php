<?php
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
    <br> <br> <br>
    <form role="form" action="" method="post">
    <br/><br/>
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="templatemo-panels">
                
                <h2 style="text-align: center;">Agendar una Cita</h2>
                <br/>
                <div class="col-md-12">

                    <div class="row form-group">
                        <div class="col-md-1 margin-bottom-15">
                        </div>

                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">Cédula</label>
                            <input type="text" class="form-control" id="txtCedula" name="txtCedula">
                        </div>

                        <div class="col-md-4 margin-bottom-15">
                            <label class="control-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                        </div>
                        
                        <div class="col-md-3 margin-bottom-15">
                            <label class="control-label">Correo Electronico</label>
                            <input type="text" class="form-control" id="txtCorreo" name="txtCorreo">
                        </div>

                        <div class="col-md-1 margin-bottom-15">
                        </div>
                    </div>
                </div>       
                <div class="col-md-12">
                    <div class="col-md-10 margin-bottom-15">
                    </div>
                    <div class="col-md-2 margin-bottom-15">
                        <input type="submit" value="Guardar" class="btn btn-primary" id="btnGuardarCita" name="btnGuardarCita">
                        <input type="submit" value="Cancelar" class="btn btn-secondary" id="btnCancelar" name="btnCancelar">
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <br/><br/>
    </form>
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