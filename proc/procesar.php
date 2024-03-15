<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $acertijo1 = $_POST['acertijo1'];
    if(isset($acertijo1) && $acertijo1 == "14" ){
       session_start();
        $_SESSION['OK1'] = $acertijo1;
        header('location: ../view/acertijo2.php'); 
    } elseif (isset($acertijo1) && $acertijo1 != "14" ){
        header("location: ../view/acertijo1.php?error=1"); 
    }

    $acertijo2 = $_POST['acertijo2'];
    if (isset($acertijo2) && $acertijo2 == "probeta" ){
       session_start();
        $_SESSION['OK2'] = $acertijo2;
        header("location: ../view/acertijo3.php"); 
    } elseif (isset($acertijo2) && $acertijo2 != "probeta" ){
        header("location: ../view/acertijo2.php?error=1"); 
    }

    $acertijo3 = $_POST['acertijo3'];
    if (isset($acertijo3) && $acertijo3 == "microscopio" ){
       session_start();
        $_SESSION['OK3'] = $acertijo3;
        header("location: ../view/acertijo4.php"); 
    } elseif (isset($acertijo3) && $acertijo3 != "microscopio" ){
        header("location: ../view/acertijo3.php?error=1"); 
    }

    $acertijo4 = $_POST['acertijo4'];
    if(isset($acertijo4) && $acertijo4 == "hidrogeno" ){
       session_start();
        $_SESSION['OK4'] = $acertijo4;
        header("location: ../view/acertijo5.php"); 
    } elseif (isset($acertijo4) && $acertijo4 != "hidrogeno" ){
        header("location: ../view/acertijo4.php?error=1"); 
    }

    $acertijo5 = $_POST['acertijo5'];
    if (isset($acertijo5) && $acertijo5 == "helio" ){
       session_start();
        $_SESSION['OK5'] = $acertijo5;
        header("location: ../view/acertijo6.php"); 
    } elseif (isset($acertijo5) && $acertijo5 != "helio" ){
        header("location: ../view/acertijo5.php?error=1"); 
    }

    $acertijo6 = $_POST['acertijo6'];
    if (isset($acertijo6) && $acertijo6 == "cloro" ){
       session_start();
        $_SESSION['OK6'] = $acertijo6;
        header("location: ../view/final.php"); 
    } elseif (isset($acertijo6) && $acertijo6 != "cloro" ){
        header("location: ../view/acertijo6.php?error=1"); 
    }
    ?>

    
</body>
</html>