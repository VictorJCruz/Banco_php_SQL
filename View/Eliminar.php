<?php
include_once '../Model/ConnBD.php';
include_once  __DIR__ . '/../Controller/UsuarioController.php';
$conn = OpenDB();
$sql = "call EliminarUsuario('" . $_GET["q"] . "')";
if (mysqli_query($conn, $sql)) {
    header("Location: editarCuenta.php"); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>