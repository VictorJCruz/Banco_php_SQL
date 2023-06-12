<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';

$datos = ConsultarDatosUsuario($_GET["q"]);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basico -->

<head>
    <?php
    links();
    ?>
</head>

<body onsubmit="return ">
    <form role="form" action="" method="post">
        <script src="View/js/RedirecciondeSeguridad.js"></script>
        <?php
        navBar();
        ?>

        <br /><br />

        <input type="hidden" value="<?php echo $datos["idUsuario"] ?>" idUsuario="txtIdUsuario" name="txtIdUsuario">

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
                                <input type="text" class="form-control" id="txtCedula" name="txtCedula" autocomplete="off" required readonly="readonly" value="<?php echo $datos["cedula"] ?>">
                            </div>

                            <div class="col-md-4 margin-bottom-15">
                                <label class="control-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre" autocomplete="off" required value="<?php echo $datos["nombre"] ?>">
                            </div>

                            <div class="col-md-2 margin-bottom-15">
                                <label class="control-label">Correo Electronico</label>
                                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" autocomplete="off" required value="<?php echo $datos["correo"] ?>">
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
                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" autocomplete="off" required value="<?php echo $datos["telefono"] ?>">
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
                                <input type="password" class="form-control" id="txtContrasenna" name="txtContrasenna" autocomplete="off" required value="<?php echo $datos["contrasenna"] ?>">
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
                            <input type="submit" value="Guardar" class="btn btn-success" id="btnActualizar" name="btnActualizar" autocomplete="off" required>
                            <a href="editarCuenta.php" class="btn btn-info">Cancelar</a>
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
    allLinks();
    ?>

</body>

</html>