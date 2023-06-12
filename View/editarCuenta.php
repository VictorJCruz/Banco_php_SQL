<?php
if (session_status() == PHP_SESSION_NONE)
session_start();
include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basico -->

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
                    <h2>Tabla para Modificar Usuarios</h2>
                    <br/>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Tipo de Usuario</th>
                                <th>Tipo de Cuenta</th>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                 EditarUsuarios();
                                
                            ?>
                        </tbody>
                    </table>
                    <div class="btn-group pull-right"> 
                        <a href="agregarUsuario.php"><button type="button" class="btn btn-info" style="background-color: #2E468C;">Añadir Usuario</button></a>
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
    <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro de cambiar el estado del usuario?</h4>
              </div>
              <div class="modal-footer">

                <input type="hidden" id="userId" name="userId" value=""/>
                
                <input type="button" class="btn btn-primary" value="Continuar" id="btnCambiarEstado" name="btnCambiarEstado"
                onclick="CambiarEstadoUsuario()">

              </div>  
            </div>
        </div>
    </div>
    <?php
    alllinks();
    ?>
    <script src="../view/js/RedirecciondeSeguridad.js"></script>;
</body>

</html>
