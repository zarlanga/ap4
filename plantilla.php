<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP **nro_tp** - EJ **nro_ej** - **nombre**</title>
</head>
<body>
    

    <?php 
    
    include("inclu/nav.php");

    $navi = new NavCreator(**total_ej**);
    $navi->generarnav();
    
    ?>
    
    <h3> **nombre**</h3>
    <h1> TP **nro_tp** </h1>

    <h1> Ejercicio **nro_ej** </h1>

    <?php 
    echo "incluya su magia aqui";
    ?>

</body>
</html>