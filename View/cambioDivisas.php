<?php
include_once __DIR__ . '\generales.php';

?>
<html>

<head>
<link rel="stylesheet" href="css/divisa.css" />
    <?php
    links();
    ?>
</head>
<style>

</style>
<body>
    <?php
    navBar();
    ?>
    <br><br><br><br><br>
    <form action="divisas">
        <script></script>
        <div class="card-container">
            <script src="js/divisa.js"></script>

            <h1 class="hh">Cambio de divisa</h1>
            <p>
                <label class="Tt">Dolares</label>
                <input id="inputEuros" type="number" placeholder="Dolares" oninput="eurosDolares(this.value)"
                    onchange="eurosDolares(this.value)">
            </p>
            <p>
                <label class="Tt">Colones</label>
                <input id="inputDolares" type="number" placeholder="Colones" oninput="dolaresEuros(this.value)"
                    onchange="dolaresEuros(this.value)">
                <br><br></br></br>
        </div>
        </div>
        </div>
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