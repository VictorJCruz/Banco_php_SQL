<?php
//Para iniciar dejar la sesion iniciada
if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuarioModel.php';
include_once __DIR__ . '\UtilitarioController.php';

//Esto es en el scrip del boton ingresar del login
if(isset($_POST["btnIngresar"]))
{
    $cedula = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtPass"];

    $datos = ValidarUsuarioModel($cedula, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["idTipoUsuario"] = $datosUsuario["idTipoUsuario"];
        
        if($_SESSION["idTipoUsuario"] == 1)
        {
            header("Location: ../index.php");
        }
        elseif($_SESSION["idTipoUsuario"] == 2)
        {
            header("Location: inicio.php");
        }
    }
    else
    {
        header("Location: Login.php");
    }
}

//El listar un usuario en mantenimiento de editar
function ListarUsuarios()
{
    $datos = ListarUsuariosModel();

    if ($datos->num_rows > 0) {
        while ($fila = mysqli_fetch_array($datos)) {
            echo '<tr>';
            echo '<td>' . $fila["cedula"] . '</td>';
            echo '<td>' . $fila["nombre"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '<td>' . $fila["telefono"] . '</td>';
            echo '<td>' . $fila["Tipo_Usuario"] . '</td>';
            echo '<td>' . $fila["Tipo_Cuenta"] . '</td>';
            echo '</tr>';
        }
    }
}

//Editar los usuarios 
function EditarUsuarios()
{
    $datos = EditarUsuariosModel();

    if ($datos->num_rows > 0) {
        while ($fila = mysqli_fetch_array($datos)) {
            echo '<tr>';
            echo '<td>' . $fila["cedula"] . '</td>';
            echo '<td>' . $fila["nombre"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '<td>' . $fila["telefono"] . '</td>';
            echo '<td>' . $fila["Tipo_Usuario"] . '</td>';
            echo '<td>' . $fila["Tipo_Cuenta"] . '</td>';
            echo '<td><a class="btn btn-secondary" href="editarUsuario.php?q=' . $fila["idUsuario"] . '">Editar<a/></td>';
            echo '<td><a class="btn btn-danger"href="Eliminar.php?q=' . $fila["idUsuario"] . '">Eliminar</td>';
            echo '</tr>';
        }
    }
}


//Dependiendo del roll asi se le mostrara el menu
function ValidarOpcionesMenu()
{
    if($_SESSION["sesionTipoUsuario"] == null)
        header("Location: ..\index.php");
    
    $tipo = $_SESSION["sesionTipoUsuario"];
    $datos = ValidarOpcionesMenuModel($tipo);

    echo '<div class="template-page-wrapper">
          <div class="navbar-collapse collapse templatemo-sidebar">
          <ul class="templatemo-sidebar-menu">';

    if ($datos->num_rows > 0) {
        while ($fila = mysqli_fetch_array($datos)) {
            echo '<li><a href="' . $fila["redireccion"] . '"><i class="' . $fila["icono"] . '"></i>' . $fila["texto"] . '</a></li>';
        }
    }
    echo '<li><a href="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
          </ul>
          </div>';
}

//Aca es el procedimiento de lista desplegable de seleccionar el tipo de usuario a ingresar
function ConsultarDatosUsuario($idUsuario)
{
    $datos = ConsultarDatosUsuarioModel($idUsuario);
    return mysqli_fetch_array($datos);
}

function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();
    if ($datos->num_rows > 0) {
        echo '<option selected value=""> Selecccione </option>';
        while ($fila = mysqli_fetch_array($datos)) {
            if ($tipo == $fila["idTipoUsuario"])
                echo '<option selected value="' . $fila["idTipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
            else
                echo '<option value="' . $fila["idTipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
        }
    }
}

function ListarTiposCuenta($tipo)
{
    $datos = ListarTiposCuentaModel();
    if ($datos->num_rows > 0) {
        echo '<option selected value=""> Selecccione </option>';
        while ($fila = mysqli_fetch_array($datos)) {
            if ($tipo == $fila["idTipoCuenta"])
                echo '<option selected value="' . $fila["idTipoCuenta"] . '">' . $fila["tipoCuenta"] . '</option>';
            else
                echo '<option value="' . $fila["idTipoCuenta"] . '">' . $fila["tipoCuenta"] . '</option>';
        }
    }
}

//El boton de actualizar (Guardar en el editar)
if (isset($_POST["btnActualizar"])) {
    $Nombre = $_POST["txtNombre"];
    $cedula = $_POST["txtCedula"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Correo = $_POST["txtCorreo"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $TipoCuenta = $_POST["cboTipoCuenta"];
    $celular = $_POST["txtTelefono"];
    $idUsuario = $_POST["txtIdUsuario"];
    $resultado = ActualizarUsuarioModel($cedula, $Nombre, $Contrasenna, $Correo,  $TipoUsuario, $TipoCuenta, $celular,$idUsuario);

    if($resultado == true)
    {
        //EnviarCorreo($Correo, 'Información Actualizada', 'Esta es la información actualizada');
        header("Location: editarCuenta.php"); 
    }
    else
    {
        //Que pasa si algo sale mal??
        header("Location: editarCuenta.php"); 
    } 

}

//El guardar en BD
if (isset($_POST["btnGuardar"])) {
    $Nombre = $_POST["txtNombre"];
    $cedula = $_POST["txtCedula"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Correo = $_POST["txtCorreo"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $Celular = $_POST["txtTelefono"];
    $TipoCuenta = $_POST["cboTipoCuenta"];

    GuardarUsuarioModel($cedula, $Nombre, $Contrasenna, $Correo, $Celular, $TipoUsuario, $TipoCuenta);
    header("Location: servicios.php");
}

if (isset($_POST["btnAgregarTra"])) {
    $Nombre = $_POST["name"];
    $NumTarjeta = $_POST["card"];
    $CVC = $_POST["cvc"];
    $Monto = $_POST["monto"];
    $ExpMes = $_POST["mes"];
    $ExpAn = $_POST["year"];
    $CuentaDes = $_POST["desti"];
    $Motivo = $_POST["motivo"];

    AgregarTransferModel($Nombre,$NumTarjeta,$CVC,$Monto,$ExpMes,$ExpAn,$CuentaDes,$Motivo);
    header("Location: servicios.php");
}

function ListarCitas()
{
    $datos = ListarCitasModel();

    if ($datos->num_rows > 0) {
        while ($fila = mysqli_fetch_array($datos)) {
            echo '<tr>';
            echo '<td>' . $fila["cedula"] . '</td>';
            echo '<td>' . $fila["nombre"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '</tr>';
        }
    }
}

//El guardar en BD
if (isset($_POST["btnGuardarCita"])) {
    $cedula = $_POST["txtCedula"];
    $Nombre = $_POST["txtNombre"];
    $Correo = $_POST["txtCorreo"];

    GuardarCitasModel($cedula, $Nombre, $Correo);
    header("Location: mostrarCitas.php");
}


?>