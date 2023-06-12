<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
    <form role="form" action="" method="post">
        <?php
        navBar();
        ?>
        <br /><br />
        <div class="templatemo-content-wrapper">
            <div class="templatemo-content">

                <div class="templatemo-panels">
                    <br /><br />
                    <div class="col-md-12">

                        <div class="row form-group">
                            <div class="col-md-2 margin-bottom-15">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                                <label class="control-label">Cédula</label>
                                <input type="text" class="form-control" id="txtCedula" name="txtCedula">
                            </div>

                            <div class="col-md-4 margin-bottom-15">
                                <label class="control-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                                <label class="control-label">Correo Electronico</label>
                                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="row form-group">
                            <div class="col-md-2 margin-bottom-15">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                                <label class="control-label">Tipo Usuario</label>
                                <select class="form-control" id="cboTipoUsuario" name="cboTipoUsuario">
                                    <?php
                                    ListarTiposUsuario($datos["idTipoUsuario"]);
                                    ?>
                                </select>
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                                <label class="control-label">Tipo Cuenta</label>
                                <select class="form-control" id="cboTipoCuenta" name="cboTipoCuenta">
                                    <?php
                                    ListarTiposCuenta($datos["idTipoCuenta"]);
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                                <label class="control-label">Telefono</label>
                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="row form-group">
                            <div class="col-md-2 margin-bottom-15">
                            </div>



                            <div class="col-md-4 margin-bottom-15">
                                <label class="control-label">Contraseña</label>
                                <input type="password" class="form-control" id="txtContrasenna" name="txtContrasenna">
                            </div>

                            <div class="col-md-4 margin-bottom-15">
                                <label class="control-label">Confirme Contraseña</label>
                                <input type="password" class="form-control" id="txtConfirmarContrasenna" name="txtConfirmarContrasenna">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-8 margin-bottom-15">
                        </div>
                        <div class="col-md-2 margin-bottom-15">
                            <input type="submit" value="Guardar" class="btn btn-success" id="btnGuardar" name="btnGuardar" autocomplete="off" required>
                            <a href="../index.php" class="btn btn-info">Cancelar</a>
                        </div>
                        <div class="col-md-1 margin-bottom-15">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br /><br />
    </form>
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