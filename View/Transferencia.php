<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '/../Controller/UsuarioController.php';
?>

<!DOCTYPE html>
<html>

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
            <input type="hidden" name="" id="" value="">

            <div class="card">
                <div class="card-header">
                    <div class="row display-tr">
                        <h3>Deposito en línea</h3>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                Nombre 
                            </label>
                            <input value="" data-conekta="card[name]" class="form-control" name="name" id="name"  type="text" >
                        </div>
                        <div class="col-md-6">
                                <label>
                                    Número de tarjeta
                                </label>
                                <input value="" name="card" id="card" data-conekta="card[number]" class="form-control"   type="text" maxlength="16" >
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <label>
                                    CVC
                                </label>
                                <input name="cvc" id="cvc" value="" data-conekta="card[cvc]" class="form-control"  type="text" maxlength="4" >
                            </div>
                            <div class="col-md-6">
                                    <label>
                                        Fecha de expiración (MM/AA)
                                    </label>
                                    <div>
                                        <input style="width:50px; display:inline-block" name="mes" id="mes" value="" data-conekta="card[exp_month]" class="form-control"  type="text" maxlength="2" >
                                        <input style="width:50px; display:inline-block" name="year" id="year" value="" data-conekta="card[exp_year]" class="form-control"  type="text" maxlength="2" >

                                    </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><span>Cuenta destino</span></label>
                            <input class="form-control" type="text" name="desti" id="desti" maxlength="200" value="">
                        </div>
                        <div class="col-md-4">
                            <label>Motivo</label>
                            <input class="form-control" type="text" name="motivo" id="motivo"maxlength="100" value="">
                        </div>
                        <div class="col-md-4">
                            <label>Monto</label>
                            <input class="form-control" name="monto" id="monto" type="number" name="total" id="total" value="">
                        </div>
                       
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-12" style="text-align:center;">
                               <button onclick="mostrar()" class="btn btn-success btn-lg" name="btnAgregarTra" id="btnAgregarTra">
                                   <i class="fa fa-check-square"></i> PAGAR
                               </button>
                            </div>
                          
                    </div>

                </div>
            </div>
            <script type="text/javascript">
        function mostrar() {

            swal('Gracias por contactarnos', 'Se envio con exito', 'success');
        }
    </script>
            
        </form>
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