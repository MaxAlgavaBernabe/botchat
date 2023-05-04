
<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);

$nombre = $_POST["nombre"];
$domicilio=$_POST["domicilio"];
$tipo=$_POST["tipo"];
$correo=$_POST["correo"];

if ($_POST['accion'] == 'añadir') {
    $sql = "INSERT INTO especialista (nombre, domicilio, tipo_especialista, correo) VALUES ('$nombre', '$domicilio', '$tipo', '$correo')";
    $resultado = mysqli_query($conn, $sql);
}
if ($_POST['accion'] == 'modificar') {
    $sql = "UPDATE especialista SET domicilio='$domicilio', tipo_especialista='$tipo', correo='$correo' WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conn, $sql);


}
if ($_POST['accion'] == 'borrar') {
    $sql = "DELETE FROM especialista WHERE nombre='$nombre'";
    $resultado = mysqli_query($conn, $sql);
}



header("Location: abc2.html");



mysqli_close($conn);

?>
