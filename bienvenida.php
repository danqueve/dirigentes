<?php
        session_start();
        if(isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
           
        } else {
            echo "No se encontraron datos de sesión.";
        }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<style>
body {
   
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f7f7f7;
}

.container {
    text-align: center;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 40px;
    background-color: white;
}

h1 {
  text-align: center;
      font-size: 40px;
    margin-bottom: 20px;
}
</style>

<body>
    <h1>Bienvenido</h1>
        
<br>
    <div class="container">
      <h4>Deben Cargar el DNI de las personas que van a movilizar nada mas</h4>
      </div>
      <br>

      <h1>Cargar DNI</h1>
      <?php
    session_start();
    if(isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
        echo "Nombre: " . $_SESSION['nombre'] . "<br>";
        echo "Apellido: " . $_SESSION['apellido'] . "<br>";
    } else {
        echo "No se encontraron datos de sesión.";
    }
?>
<h2>Registrar Números de DNI</h2>
<!-- Agregar el siguiente enlace -->
<a href="cargar_dni.php">Cargar DNI</a>
</div>
</body>
</html>
