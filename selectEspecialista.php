<?php
include 'conexion.php';
$conn = mysqli_connect($host, $user, $pass, $db);

$sql="SELECT * FROM especialista";

$resultado=mysqli_query( $conn,$sql);


while ($row = mysqli_fetch_assoc($resultado)) {
    $nombre = $row["nombre"];
    $genero= $row["domicilio"];
    $region = $row["tipo_especialista"];
    $nacimiento = $row["correo"];
    
    echo "<p>Nombre: $nombre</p>";
    echo "<p>DOmicilio: $genero</p>";
    echo "<p>Especialista: $region</p>";
    echo "<p>correo: $nacimiento</p>";
   

}
mysqli_free_result($resultado);
mysqli_close($conn);

?>
