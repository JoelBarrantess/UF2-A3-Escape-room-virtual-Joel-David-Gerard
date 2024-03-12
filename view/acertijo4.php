<?php
   session_start(); 
    if(!isset($_SESSION['OK3'])){
    header("location: ./acertijo1.php?error=2"); 
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acertijo 4</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <header>
        <h1>El Enigma del Laboratorio</h1>

        <p>En frascos y tubos me encontrarás,<br>
    en el laboratorio, mi magia brillará.<br>
    Con fuego y con agua me conocen bien,<br>
    soy esencial, un amigo fiel.</p>

    <p>En mi nombre hay metal y también gas,<br>
    mi símbolo en la tabla es clave, sin paz.<br>
    ¿Qué soy en este lugar científico,<br>
    que en experimentos soy tan específico?</p>

    </header>
    <div class="background-image"></div>
    <main>
        <section>

            <form action="../proc/procesar.php" method="POST" id="formulario">>
                <input type="text" name="acertijo4" placeholder="Escribe tu respuesta aquí">
                <button type="submit">¡Enviar!</button>
            </form>
        </section>
    </main>
</body>

<?php
    if(isset($_GET['error']) && $_GET['error'] == 1 ){
        echo "es el elemento químico más ligero y abundante en el universo.";
    }
    ?>