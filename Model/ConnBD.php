<?php

function OpenDB()
{
    //cambiar el puerto si da error (3308) // (3306)
    return mysqli_connect("127.0.0.1:3308", "root", "", "banco_db");
}

function CloseDB($enlace)
{
    mysqli_close($enlace);
}

?>
