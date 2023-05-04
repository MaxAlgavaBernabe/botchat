<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);

$nombre = $_POST["nombre"] . " " . $_POST["apellido"];
$genero=$_POST["genero"];
$region=$_POST["nacionalidad"];
$nacimiento=$_POST["nacimiento"];

if ($_POST['accion'] == 'añadir') {
    $sql = "INSERT INTO paciente (nombre, genero, region, fecha_nacimiento) VALUES ('$nombre', '$genero', '$region', '$nacimiento')";
    $resultado = mysqli_query($conn, $sql);
}
if ($_POST['accion'] == 'modificar') {
    $sql = "UPDATE paciente SET genero='$genero', region='$region', fecha_nacimiento='$nacimiento' WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conn, $sql);


}
if ($_POST['accion'] == 'borrar') {
    $sql = "DELETE FROM paciente WHERE nombre='$nombre'";
    $resultado = mysqli_query($conn, $sql);
}



header("Location: abc.html");



mysqli_close($conn);

?>
