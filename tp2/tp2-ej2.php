<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Roberto Zitto tp2 ej 2</h1>
    <?php 
    $sources = array("imagen1.jpg", "imagen2.jpg", "imagen3.jpg", "puppylove.png");

    shuffle($sources);

    foreach($sources as $s) {
        echo "<img src='img/$s' alt='' style='width:24vw'/>" ;
    }
    ?>
    <br>
    <br>
    <a href="tp2-ej1.php">Link a ejercicio 1</a>
</body>
</html>