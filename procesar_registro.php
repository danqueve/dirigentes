<?php
include 'conexion.php';

$dni = $_POST['dni'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$circuito = $_POST['circuito'];

$sql = "INSERT INTO usuarios (dni, apellido, nombre, celular, circuito) VALUES ('$dni', '$apellido', '$nombre', '$celular', '$circuito')";

if ($conn->query($sql) === TRUE) {
    $usuario_id = $conn->insert_id; 
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['circuito'] = $circuito;
    echo "<script>
            alert('Usuario registrado con éxito.');
            window.location.href='login.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
