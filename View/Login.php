<?php
include_once __DIR__ . '\..\Controller\UsuarioController.php';
?>
<!DOCTYPE html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/Login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="templatemo-bg-image-1">
    <br>
    <br>
    <form role="form" action="" method="post">
        <img src="images/logoN.png" alt="">
        <div class="container">
            <div class="col-md-12">
                <div class="form-horizontal templatemo-login-form-2">
                    <div class="row">
                        <div class="col-md-12">
                            <h2></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="templatemo-one-signin col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="lblIdentificacion" class="control-label">Identificación</label>
                                    <div class="templatemo-input-icon-container">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" id="txtIdentificacion"
                                            name="txtIdentificacion" placeholder="" onblur="ValidarExisteCedula();">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="lblPass" class="control-label">Contraseña</label>
                                    <div class="templatemo-input-icon-container">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" id="txtPass" name="txtPass"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar"
                                        class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
</body>

</html>