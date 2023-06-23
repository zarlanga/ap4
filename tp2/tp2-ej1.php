<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Roberto Zitto tp2</title>
    <style>
        .rojo {
            color:red;
        }
        .azul {
            color:blue;
        }
        .verde {
            color:green;
        }
    </style>
</head>
<body>

    <a href="tp2-ej2.php">Link a ejercicio 2</a>
    <br>

    <h1>Roberto Zitto tp2 ej 1</h1>
    <?php

    $separador = "<br><br>----------------<br><br><br>";

    $contraseñas = array("Administrador" => "contraseña admin", 
        "Editor" => "contraseña editor", 
        "Autor" => "contraseña autor",
        "Colaborador" => "contraseña colaborado",
        "Suscriptor" => "contraseña suscriptor");
        
    foreach($contraseñas as $u => $c) {
        echo "el usuario es: " . darColor($u, "b") . 
        "la contraseña es: " . darColor($c, "g") . "<br>";
    }

    echo $separador;

    echo "<h2 style='color:#700394'>Experimentos varios</h2>";

    //echo "<script>alert('estoseprestaabardo')</script>";


    $arr[0] = "test"; 
    $arr[3] = "hola";
    $arr[7] = "comova?";
    
    foreach ($arr as $a => $v) {
        echo "\$a es $a y \$v es $v <br>";
    }

    echo $separador ;

    reset($arr);// ?????
    
    for ($i = 0; $i < count($arr); $i++) {
        echo "\$i es " . darColor($i, "b") . ",  el puntero es ".  darColor(key($arr), "r") . " y el valor es ".  darColor($arr[key($arr)], "g") . "<br>";
        echo "el next es:" . darColor(next($arr), "b") . "<br>";
        // el next no devuelve false ni undefined ni nada?

        //echo "ah, y si le pongo \$arr[\$i] da null o rompe?" . darColor($arr[$i], "r") . "<br>";
        //rompe

        //echo "el nextnext es:" . next(next($arr)). "<br>"; esto no funciona pq el segundo next tendria que recibir un array?
    }

    echo " <br> \$i fuera del loop existe? ". darcolor($i,'r') . "<br>";

    echo $separador ;

    $num1 = 5;
    $num2 = 4;

    echo "probando sumar variables da ($num1 + $num2) ahrequeestonosepuedesinelpunto <br> ";

    echo "probando sumar dos string " . "1" + "1";

    echo $separador ;

    echo "<h3> probando shuffle</h3>";

    $str = "asereje ja de je de jebe tu de jebe re serebinowa";
    $str = explode(" ", $str);
    shuffle($str);


    foreach($str as $s) {
        echo $s ." ";
    }

    //se puede cambiar el tipo de variable y jajajquegraciosoexplode

    echo $separador;

    echo "<h3> probando anidar con loops </h3>";

    for ($i = 1; $i < 4; $i++) {
        for ($j = 1; $j <4; $j++){
            $arrAnidad["bardo$i"]["sub". $j + $j] = $j * 3;
            //$arrAnidad["bardo$i"]["<h3>sub". $j + $j. "</h3>"] = $j;
            //jiji, poco practico pero divertido
        }
    }

    foreach($arrAnidad as $k => $v){
        foreach($v as $subK => $subV) {
            echo "la key exterior es " . darColor($k, "r") . 
            ", la key interior es " . darColor($subK, "g") . 
            ", el valor es " . darColor($subV, "b") . "<br>";
        }
        echo "<br>";
    }

    echo $separador;
/*
    //ordenar vectores asociativos
    $moneda = array(
        "francia" => "franco",
        "japon" => "yen",
        "brasil" => "real",
        "italia" => "lira",
        "argentina" =>"peso"
    );
    asort($moneda);
    //arsort($moneda);
    ksort($moneda);
    //krsort($moneda);
    echo "<h2>"."Vector ordenado por países "."</h2>";
    foreach($moneda as $i=>$valor){
        echo "posición: " . $i . " ‐ ";
        echo "contenido: " . $valor; echo "<br/>";
    }

    echo $separador;
*/

    echo "<h3> probando anidar declarando </h3>";

    $arrAnidadoDeclarado = array(
        "indicejuera1" => array("valor 1", "valor 2"), 
        "indicejuera2" => array("valor 1", "valor 2"), 
        "ahperayestorompe?" => array("valor sin key", "key irregular" => "estosevaadescontrolar"),
        array("y asi entonces?", "deberia andar"),
        "mechando uno con key" => array("que tiene que ser array aunque sea un solo valor"),
        array("y un valor sin key")
    );

    foreach($arrAnidadoDeclarado as $k => $v){
        foreach($v as $subK => $subV) {
            echo "la key exterior es " . darColor($k, "g") .
            ", la key interior es " . darColor($subK, "r") .
            ", el valor es " . darColor($subV, "b") ."<br>";
        }
        echo "<br>";
    }

    // y despues dicen que javascript es el que permite chanchadas :D

    
    echo "<br><br><h3>ordenando el array</h3><br><br>";

    ksort($arrAnidadoDeclarado);
    
    reset($arrAnidadoDeclarado);

    do {
        
        $arrInt = $arrAnidadoDeclarado[key($arrAnidadoDeclarado)];

        reset($arrInt);

        //ahhhh, no se puede usar un while para que no cambie el puntero antes de recorrer

        do {
            echo "indice exterior:" . darColor(key($arrAnidadoDeclarado), "g") . 
            " indice interior: " . darColor(key($arrInt), "r") .
            " valor: " . darColor($arrInt[key($arrInt)], "b") , "<br>";


        } while (next($arrInt)) ;
        //next($arrAnidadoDeclarado[key($arrAnidadoDeclarado)])
        echo "<br>";
    } while(next($arrAnidadoDeclarado)) ;

    function darColor ($str, $c){
        $color =  $c == "r" ? "red" : ($c == "g" ? "green" : "blue") ;
        return "<span style='color:$color'> $str </span>" ;
    }


/*
    foreach($arrAnidadoDeclarado as $k => $v){
        reset($arrAnidadoDeclarado[key($arrAnidadoDeclarado)]);

        foreach($v as $subK => $subV) {
            echo "la key exterior es ". key($arrAnidadoDeclarado) .", la key interior es $subK, el valor es $subV <br>";

            next($arrAnidadoDeclarado[key($arrAnidadoDeclarado)])
        }
        echo "<br>";
        next($arrAnidadoDeclarado)
    }
*/
    

    ?>
</body>
</html>