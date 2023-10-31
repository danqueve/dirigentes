<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<h1>Registro de Usuario</h1>
    
    <form  action="procesar_registro.php" method="post">

    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="dni" class="col-form-label">DNI</label>
      </div>
      <div class="col-auto">
        <input type="number" id="dni" name="dni" class="form-control" aria-describedby="dni">
      </div>
      <div class="col-auto">
             </div>
    </div>
<br>
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="apellido" class="col-form-label">APELLIDO</label>
      </div>
      <div class="col-auto">
        <input type="text" id="apellido" name="apellido" class="form-control" aria-describedby="apellido">
      </div>
      <div class="col-auto">
             </div>
    </div>
    <br>
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="nombre" class="col-form-label">NOMBRE</label>
      </div>
      <div class="col-auto">
        <input type="text" id="nombre" name="nombre" class="form-control" aria-describedby="nombre">
      </div>
      <div class="col-auto">
             </div>
    </div>
    <br>
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="celular" class="col-form-label">CELULAR</label>
      </div>
      <div class="col-auto">
        <input type="number" id="celular" name="celular" class="form-control" aria-describedby="celular">
      </div>
      <div class="col-auto">
             </div>
    </div>
    <br>
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="circuito" class="col-form-label">CIRCUITO</label>
      </div>
      <div class="col-auto">
        <input type="text" id="circuito" name="circuito" class="form-control" aria-describedby="circuito">
      </div>
      <div class="col-auto">
             </div>
    </div>


  

        <!-- DNI: <input type="text" name="apellido" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Celular: <input type="text" name="celular" required><br>
        Circuito: <input type="text" name="circuito" required><br> -->

        <input type="submit" value="Registrar">
    </form>
</div>

</body>
</html>
