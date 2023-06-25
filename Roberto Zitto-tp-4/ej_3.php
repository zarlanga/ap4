<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - EJ 3 - Roberto Zitto</title>
</head>
<body>
    

    <?php 
    
    include("../inclu/nav.php");

    $navi = new NavCreator(5);
    $navi->generarnav();
    
    ?>
    
    <h3> Roberto Zitto</h3>
    <h1> TP 4 </h1>

    <h1> Ejercicio 3 </h1>

    <form action="#" method="post">
        <input type="text" name="cadena" id="">
        <input type="submit" value="Enviar">
    </form>

    <br><br>

    <?php 
    if (!$_POST){
        echo "no se ha recibido formulario";
    } else if (!$_POST["cadena"]){
        echo "cadena vacia";
    } else {
        $cadena = $_POST["cadena"];
        $posicion =  strpos($cadena, "@") ;
        if (!$posicion && $cadena[0] != "@") echo "E mail incorrecto, agregue arroba";
        if ($cadena[0] == "@") echo "e-mail incompleto, por favor corrija su email";
    }
    ?>

</body>
</html>