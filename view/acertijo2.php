<?php
   session_start(); 
    if(!isset($_SESSION['OK1'])){
    header("location: ./acertijo1.php?error=2"); 
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acertijo 2</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <header>
        <h1>El Enigma del Laboratorio</h1>
    </header>
    <div class="background-image"></div>
    <main>
        <section>
            <h2>¡Resuelve el enigma!</h2>
            <p>En laboratorio nace mi hogar,<br>
            líquidos y sólidos suelo albergar.<br>
            Midiendo el mundo en su interior,<br>
            mi transparencia es mi mayor valor.</p>
            <p>En la ciencia, soy una herramienta esencial,<br>
            mis medidas revelan la verdad sin igual.<br>
            En mí se gestan descubrimientos brillantes,<br>
            soy la clave de experimentos vibrantes.</p>
            <p>¿Qué soy?</p>
            <form action="../proc/procesar.php" method="POST" id="formulario">>
                <input type="text" name="acertijo2" placeholder="Escribe tu respuesta aquí">
                <button type="submit">¡Enviar!</button>
            </form>
        </section>
    </main>
</body>
</html>

    
    
    <?php
    if(isset($_GET['error']) && $_GET['error'] == 1 ){
        echo "Mal! La pista es que es un utensilio que este hecho de cristal";
    }
    if(isset($_GET['error']) && $_GET['error'] == 2 ){
        echo "No te intentes colar! Por intentar colarte vuelves a la anterior";
    }
    ?>
</body>
