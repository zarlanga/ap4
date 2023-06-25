<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 4 - EJ 2 - Roberto Zitto</title>
    <style>
        span {
            border:1px solid red;
            color: blue;
        }
    </style>
</head>
<body>
    

    <?php 
    
    include("../inclu/nav.php");

    $navi = new NavCreator(5);
    $navi->generarnav();
    
    ?>
    
    <h3> Roberto Zitto</h3>
    <h1> TP 4 </h1>

    <h1> Ejercicio 2 </h1>

    <p>$array1 = array("#","$","%","&","[","]","{","}","*","/","=");<span>//se define  la variable $array1 y se almacena ahi un array con 11 caracteres especiales </span></p>
    <p>$array2 = ""; <span>//se define la variable $array2 y se le asigna un valor nulo (un string vacio)</span></p>
    <p>$calculo = ‘$var=numero1/(numero2*numero3)’;<span>//se define la variable $calculo y se le asigna un string </span></p>
    <p>$res = str_replace($array1,$array2,$calculo);<span>//se define la variable $res y se almacena en ella el resultado de la funcion str_replace dandole a ella los parametros correspondientes para eliminar de la cadena $calculo los caracteres especificados en $array1</span></p>
    <p>$res = substr($res,1,2);<span>//se sobrescribe la variable $res con el substring resultante de incluir dos caracteres a partir de la segunda posicion del string</span></p>
    <p>echo "$res"; <span>//se muestra en pantalla lo contenido en la cadena $res  </p>


</body>
</html>