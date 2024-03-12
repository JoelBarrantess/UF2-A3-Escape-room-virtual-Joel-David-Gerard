<?php
   session_start(); 
    if(!isset($_SESSION['OK5'])){
    header("location: ./acertijo2.php?error=2"); 
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acertijo 6</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <header>

    <h1>El Enigma del Laboratorio</h1>

  <p>Puedo mantener limpia una piscina, pero también puedo envenenarte.<br>
  ¿Qué soy yo?</p>




</body>
</html>
    </header>
    <div class="background-image"></div>
    <main>
        <section>

            <form action="../proc/procesar.php" method="POST" id="formulario">>
                <input type="text" name="acertijo6" placeholder="Escribe tu respuesta aquí">
                <button type="submit">¡Enviar!</button>
            </form>
        </section>
    </main>
</body>
</html>
<?php
    if(isset($_GET['error']) && $_GET['error'] == 1 ){
        echo "Desinfecta piscinas";
    }
?>
