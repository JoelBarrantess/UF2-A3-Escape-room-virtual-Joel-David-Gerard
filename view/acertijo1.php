



<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="../css/style1.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acertijo1</title>
  
</head>
<img src="" alt="">
<body>
  <div class="background-image"></div>

<div class="panel">
  <h2>Introduce el código Requerido</h2>
  <form action="../proc/procesar.php" method="POST" id="formulario">
    <input type="password" name="acertijo1" placeholder=" (Champions Madrid) " required>
    <br>
    <button type="submit">Verificar</button>
  </form>
</div>
</body>
</html>
<?php
    if(isset($_GET['error']) && $_GET['error'] == 1 ){
        echo "Error, la pista es: Cuantas champions tiene el madrid?";
    }
    if(isset($_GET['error']) && $_GET['error'] == 2 ){
        echo "No te intentes colar! Por intentar colarte vuelves a la anterior";
    }
    ?>
</body>
</html>
    




    