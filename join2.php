<?php

include 'conexion.php';

$conn = mysqli_connect($host, $user, $pass, $db);




$sql = "SELECT p.nombre, p.edad, s.descripcion FROM paciente p INNER JOIN sintoma s ON p.nombre = s.nombre_paciente";
$resultados = mysqli_query($conn, $sql);

echo "<h1>Reporte de los sintomas que a tenido cada paciente</h1>";
echo "<table>";
echo "<tr><th>nombre Paciente</th><th>Edad               </th<th>Sintoma</th></tr>";
while ($fila = mysqli_fetch_assoc($resultados)) {
    echo "<tr><td>" . $fila['nombre'] . "</td><td>" . $fila['edad'] . "</td><td>" . $fila['descripcion'] . "</td></tr>";
}
echo "</table>";

mysqli_close($conn);

?>
