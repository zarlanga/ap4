<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    //<a href="ejercicio_1"> Ejercicio 1 </a>
    include("inclu/nav.php");

    //if(!$_POST){
        //echo "no hay formulario";
    //} else { 

        $navi = new NavCreator(15);
        $navi->generarnav();
    //}


    ?>
</body>
</html>