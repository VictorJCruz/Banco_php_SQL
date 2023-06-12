<?php

include_once 'ConnBD.php';

//Para ingresar el usuario en el index
function ValidarUsuarioModel($cedula, $contrasenna)
{
    $enlace = OpenDB();

    $procedimiento = "call consultarUsuario('$cedula', '$contrasenna');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//
function ListarUsuariosModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function EditarUsuariosModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


function MEliminarUsuariosodel($idUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call EliminarUsuario('$idUsuario');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ListarCuentaModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTipoCuenta();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}
function ListarTiposCuentaModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTiposCuenta();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Depende del roll asi poder ingresar
function ValidarOpcionesMenuModel($tipoUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarMenu($tipoUsuario);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para consultar la info del usuario
function ConsultarDatosUsuarioModel($idUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarUsuarioId($idUsuario);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para mostrar usuarios en db
function ListarTiposUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTiposUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para el editar usuario
function ActualizarUsuarioModel($cedula, $Nombre, $Contrasenna, $Correo,  $TipoUsuario, $TipoCuenta, $celular,$idUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ActualizarUsuarios('$cedula', '$Nombre', '$Contrasenna', '$Correo', '$celular', '$TipoUsuario', '$TipoCuenta', '$idUsuario');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

//Para guardar un usuario nuevo 
function GuardarUsuarioModel($cedula,$Nombre,$Contrasenna,$Correo,$Celular,$TipoUsuario,$TipoCuenta)
{
    $enlace = OpenDB();

    $procedimiento = "call GuardarUsuario('$cedula','$Nombre','$Contrasenna','$Correo','$Celular',$TipoUsuario,'$TipoCuenta');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function AgregarTransferModel($Nombre,$NumTarjeta,$CVC,$Monto,$ExpMes,$ExpAn,$CuentaDes,$Motivo)
{
    $enlace = OpenDB();

    $procedimiento = "call AgregarTransfer('$Nombre','$NumTarjeta','$CVC','$Monto','$ExpMes','$ExpAn','$CuentaDes','$Motivo');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ListarCitasModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarCitas();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

//Para guardar un citas nuevo 
function GuardarCitasModel($cedula,$Nombre,$Correo)
{
    $enlace = OpenDB();

    $procedimiento = "call InsertarCita('$cedula','$Nombre','$Correo');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

?>


