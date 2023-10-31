<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido</h1>
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
    <?php
        if(isset($_SESSION['usuario_id'])) {
            $usuario_id = $_SESSION['usuario_id'];
            echo "<form action='procesar_dni.php' method='post'>
                    DNI: <input type='text' name='dni' required><br>
                    <input type='hidden' name='usuario_id' value='$usuario_id'>
                    <input type='submit' value='Cargar DNI'>
                  </form>";
        } else {
            echo "No se encontraron datos de sesión.";
        }
    ?>

    <!-- Nuevo formulario para cargar DNI -->
    <h2>Cargar DNI Directamente</h2>
    <?php
        if(isset($_SESSION['usuario_id'])) {
            $usuario_id = $_SESSION['usuario_id'];
            echo "<form action='procesar_dni.php' method='post'>
                    DNI: <input type='text' name='dni' required><br>
                    <input type='hidden' name='usuario_id' value='$usuario_id'>
                    <input type='submit' value='Cargar DNI'>
                  </form>";
        } else {
            echo "No se encontraron datos de sesión.";
        }
    ?>
</body>
</html>
