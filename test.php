<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3> **nombre**</h3>
    <h1> TP **nro_tp** </h1>

    <h1> Ejercicio **nro_ej** </h1>


    <?php 
    
    include("inclu/nav.php");

    $navi = new NavCreator(15);
    $navi->generarnav();
    
    ?>
    

</body>
</html>