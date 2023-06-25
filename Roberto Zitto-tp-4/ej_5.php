<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - EJ 5 - Roberto Zitto</title>
</head>
<body>
    

    <?php 
    
    include("../inclu/nav.php");

    $navi = new NavCreator(5);
    $navi->generarnav();
    
    ?>
    
    <h3> Roberto Zitto</h3>
    <h1> TP 4 </h1>

    <h1> Ejercicio 5 </h1>

    <?php 
    $ciudades = array("Delhi", "Shangai", "Ciudad del Cabo", "Ciudad Gotica");
    echo implode(" # ", $ciudades);
    ?>

</body>
</html>