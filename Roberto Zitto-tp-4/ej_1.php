<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - EJ 1 - Roberto Zitto</title>
</head>
<body>
    

    <?php 
    
    include("../inclu/nav.php");

    $navi = new NavCreator(5);
    $navi->generarnav();
    
    ?>
    
    <h3> Roberto Zitto</h3>
    <h1> TP 4 </h1>

    <h1> Ejercicio 1 </h1>

    <form action="#" method="post">
        <input type="text" name="cadena" id="">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <br>

    <?php 
    if($_POST && $_POST["cadena"] && strlen($_POST["cadena"]) < 80 ) {
 
        echo strtoupper(trim($_POST["cadena"]));
      
     } else if (!$_POST) {
     
        echo "no se ha recibido el formulario";
     
     } else if (!$_POST["cadena"]) {
     
        echo "el campo enviado esta vacio";
     
     } else if( !(strlen($_POST["cadena"]) < 80 )  ) {
     
        echo "la cadena debe ser de menos de 80 caracteres";
     
     }
    ?>

</body>
</html>