<?php
include_once __DIR__ . '\generales.php';

?>
<html>
<head>
    <?php
    links();
    ?>
</head>
<body>
    <?php
        navBar();
    ?>
    <br><br><br>
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
                        
                    </div>
                </div>
            </div>
        </div>
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