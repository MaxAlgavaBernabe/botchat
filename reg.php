<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);

$nombre = $_POST["nombre"] . " " . $_POST["apellido"];
$genero=$_POST["genero"];
$region=$_POST["nacionalidad"];
$nacimiento=$_POST["nacimiento"];
$correo=$_POST["correo"];
$password=$_POST["password"];

$sql = "INSERT INTO paciente (nombre, genero, region, fecha_nacimiento) VALUES ('$nombre', '$genero', '$region', '$nacimiento')";
$resultado = mysqli_query($conn, $sql);

$sql = "INSERT INTO usuario (correo, contrasena, nombre) VALUES ('$correo', '$password', '$nombre')";
$resultado = mysqli_query($conn, $sql);


header("Location: index.html");

mysqli_free_result($resultado);
mysqli_close($conn);

?>

