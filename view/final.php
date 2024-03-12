<?php
   session_start(); 
    if(!isset($_SESSION['OK6'])){
    header("location: ./acertijo1.php?error=2"); 
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has Ganado</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="background-image"></div>
    </div>
    <header class="titulo" style="padding:20px; text-align: center; margin-bottom: 20px; font-weight: bolder; border: 1px solid black; background-color: white;">
        <h1>¡Has escapdo!</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    
    <button type="button" class="empezar btn btn-dark"><a href="./acertijo1.php">Volver a Empezar</a></button>
