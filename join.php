<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);




$sql = "SELECT p.nombre,a.nombre FROM paciente p JOIN amigo a ON p.nombre = a.nombre_paciente";
$resultados = mysqli_query($conn, $sql);

echo "<h1>Reporte de los amigos de cada paciente</h1>";
echo "<table>";
echo "<tr><th>nombre Paciente</th><th>Amigo</th></tr>";
while ($fila = mysqli_fetch_assoc($resultados)) {
    echo "<tr><td>" . $fila['nombre'] . "</td><td>" . $fila['nombre'] . "</td></tr>";
}
echo "</table>";

mysqli_close($conn);

?>
