<?php
include 'conexion.php';

$dni = $_POST['dni'];

$sql = "SELECT * FROM usuarios WHERE dni='$dni'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    while($row = $result->fetch_assoc()) {
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        header("Location: bienvenida.php");
        exit();
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>
