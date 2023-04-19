<?php
include 'conexion.php';
$conn = mysqli_connect($host, $user, $pass, $db);

$sql="SELECT * FROM paciente";

$resultado=mysqli_query( $conn,$sql);


while ($row = mysqli_fetch_assoc($resultado)) {
    $nombre = $row["nombre"];
    $genero= $row["genero"];
    $region = $row["region"];
    $nacimiento = $row["fecha_nacimiento"];
    $edad = $row["edad"];
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Genero: $genero</p>";
    echo "<p>Region: $region</p>";
    echo "<p>Fecha nacimiento: $nacimiento</p>";
    echo "<p>Edad: $edad</p>";

}
mysqli_free_result($resultado);
mysqli_close($conn);

?>
