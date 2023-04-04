<?php
include 'conexion.php';
$conn = mysqli_connect($host, $user, $pass, $db);
$correo=$_POST['user'];
$password=$_POST['password'];

$sql = "SELECT * FROM `usuario` WHERE correo = '$correo' AND contrasena ='$password'";
$result = mysqli_query($conn, $sql);
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

?>