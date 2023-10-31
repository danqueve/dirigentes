<?php
include 'conexion.php';

$dni = $_POST['dni'];
$usuario_id = $_POST['usuario_id'];

$sql = "INSERT INTO dnis_cargados (dni, usuario_id) VALUES ('$dni', '$usuario_id')";

if ($conn->query($sql) === TRUE) {
    echo "DNI cargado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
