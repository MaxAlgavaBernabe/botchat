<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);

$nombre = $_POST["nombre"] . " " . $_POST["apellido"];
$genero=$_POST["genero"];
$region=$_POST["nacionalidad"];
$nacimiento=$_POST["nacimiento"];
$user=$_POST['user'];
$password=$_POST['password'];

$sql = "INSERT INTO paciente (nombre, genero, region, fecha_nacimiento) VALUES ('$nombre', '$genero', '$region', '$nacimiento')";
$resultado = mysqli_query($conn, $sql);

$sql = "INSERT INTO usuario (correo, contrasena, nombre) VALUES ('$user', '$password', '$nombre')";
$resultado = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM `usuario` WHERE correo = '$user' AND contrasena ='$password'";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) == 1) {
    // Iniciar sesión y redirigir al usuario a la página de inicio
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header("Location: chat.html");
    exit;
} else {
    // Mostrar un mensaje de error si el usuario y la contraseña son incorrectos
    header("Location: error.html");
}


mysqli_free_result($resultado);
mysqli_close($conn);

?>

