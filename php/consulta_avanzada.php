<?php
include 'conexion.php';

$sql = "SELECT H.nombre, COUNT(R.id_reserva) AS numero_reservas
        FROM HOTEL H
        JOIN RESERVA R ON H.id_hotel = R.id_hotel
        GROUP BY H.nombre
        HAVING COUNT(R.id_reserva) > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Hotel: " . $row["nombre"]. " - Reservas: " . $row["numero_reservas"]. "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
