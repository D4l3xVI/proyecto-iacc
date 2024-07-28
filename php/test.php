<?php
include 'conexion.php';

$sql = "SELECT DATABASE()";
$result = $conn->query($sql);

if ($result) {
    echo "Conectado a la base de datos: " . $result->fetch_assoc()['DATABASE()'];
} else {
    echo "Error en la consulta: " . $conn->error;
}

$conn->close();
?>
