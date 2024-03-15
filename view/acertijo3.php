<?php
   session_start(); 
    if(!isset($_SESSION['OK2'])){
    header("location: ../acertijo2.php?error=2"); 
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
        <h1>Acertijo del Laboratorio</h1>

        <p>En un laboratorio brillante, donde la ciencia se encuentra,<br>
        Átomos bailan y moléculas se expanden.<br>
        En frascos y tubos, secretos se esconden,<br>
        Pero uno en especial, misterioso se funde.</p>

        <p>De día es transparente, de noche resplandece,<br>
        En su interior, la magia acontece.<br>
        Sin ojos, ve lo invisible,<br>
        Y en su nombre, la verdad es posible.</p>

        <p>¿Qué es este misterio en el laboratorio,<br>
        que revela secretos con su brillo notorio?</p>
            <p>¿Qué soy?</p>
            <form action="../proc/procesar.php" method="POST" id="formulario">>
                <input type="text" name="acertijo3" placeholder="Escribe tu respuesta aquí">
                <button type="submit">¡Enviar!</button>
            </form>
        </section>
    </main>
</body>
</html>



    <?php
    if(isset($_GET['error']) && $_GET['error'] == 1 ){
        echo "Mal! La pista tiene que ver con una herramienta que tiene zoom";
    }
    if(isset($_GET['error']) && $_GET['error'] == 2 ){
        echo "No te intentes colar! Por intentar colarte vuelves a la anterior";
    }
    ?>
</body>