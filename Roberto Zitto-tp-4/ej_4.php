<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - EJ 4 - Roberto Zitto</title>
</head>
<body>
    

    <?php 
    
    include("../inclu/nav.php");

    $navi = new NavCreator(5);
    $navi->generarnav();
    
    ?>
    
    <h3> Roberto Zitto</h3>
    <h1> TP 4 </h1>

    <h1> Ejercicio 4 </h1>

    <form action="#" method="post">
        <input type="text" name="cadena" id="">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php 

    if (!$_POST){
        echo "no se ha recibido formulario";
    } else if (!$_POST["cadena"]){
        echo "el campo es obligatorio";
    } else {
        $cadena = $_POST["cadena"];
        $cadena = str_replace(".", "", $cadena);
        echo $cadena. "<br>";
        if (strlen($cadena) == 7) echo "Tramite de jubilacion";


    }
    ?>

</body>
</html>