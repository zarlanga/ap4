<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Clase 4</title>
</head>
<body>
    <?php
    //lista de funciones de php https://www.php.net/manual/es/indexes.functions.php

    // Longitud de una cadena de texto. 
    // strlen(string $texto): int
    echo "<h2>Longitud de Cadena</h2>";
    $textoDeEntrada = "Soy un texto";
    echo "Cadena inicial: $textoDeEntrada <br>";
    if (strlen($textoDeEntrada)==0) {
        echo 'Resultado: Cadena Vacía <br>';
    }else{
        echo "Resultado: Cadena no Vacía, tiene " . strlen($textoDeEntrada) . " caracteres";
    }



    // Búsqueda dentro de una cadena. 
    // strpos(string $texto, string $textoBuscado, int $offset= 0 ): int | FALSO
    // Es sensible a mayúsculas y minúsculas
    echo "<h2>Búsqueda en una cadena</h2>";
    $texto = 'ARGENTINA PROGRAMA';
    $buscar = 'A';
    echo "En la cadena '$texto' se búsca '$buscar' <br>";
    $pos = strpos($texto, $buscar); // $pos devuelve 0
    echo "El texto $buscar aparece en la posición $pos <br>";
    $pos = strpos($texto, $buscar, 9); // $pos devuelve 15
    echo "Desde la posición 9, el texto $buscar aparece en la posición $pos <br>";

    //Mejora
    if($pos!=0){
        echo "El texto '$buscar' aparece en la posición '$pos' <br>";
    } else {
        echo "No se encuentra '$buscar' en el texto '$texto'";
    }

    

    // Reemplazar una cadena por otra dentro de una cadéna principal
    // str_replace(array|string $buscar, array|string $reemplazarPor, array|string $cadena, int &$count = null): string|array
    echo "<h2>Reemplazar dentro de un texto</h2>";
    $buscar = "siempre";
    $reemplazarPor = "nunca";
    $cadena = "Uno siempre se da por vencido";
    echo "En la cadena '$cadena' reemplazamos '$buscar' por '$reemplazarPor' <br>";
    $res = str_replace($buscar,$reemplazarPor,$cadena);
    echo "Resultado: $res <br>"; 
    // $res devuelve "Uno nunca se da por vencido"
    //otro caso
    $buscar = array("a","e","i","o","u");
    $reemplazarPor = "";
    $cadena = "argentina programa";
    echo "En la cadena '$cadena' reemplazamos las vocales por '$reemplazarPor' <br>";
    $res = str_replace($buscar,$reemplazarPor,$cadena); 
    echo "Resultado: $res <br>"; 
    // $res devuelve "rgntn prgrm"
    // otro caso
    $buscar = array("torta","alfajor","gaseosa");
    $reemplazarPor = array("verduras","huevo","agua");
    $cadena = "comere torta y alfajor y beberé gaseosa";
    echo "En la cadena '$cadena' reemplazamos ";
    foreach($buscar as $valor){
        echo "'$valor', ";
    }
    echo "por ";
    foreach($reemplazarPor as $remplazo){
        echo "'$remplazo', ";
    }
    echo "respectivamente. <br>";
    $res = str_replace($buscar,$reemplazarPor,$cadena); 
    echo "Resultado: $res <br>";
    // $res devuelve "comere verduras y huevo y beberé agua"



    // Extraer una porción del texto
    // substr(string $string, int $pos, int $longitud=null):string
    echo "<h2>Extraer texto de otro</h2>";
    $texto="abcdef";
    echo "Texto original: $texto <br>";
    $rest = substr($texto, -1); // devuelve "f"
    echo "Resultado: $rest <br>";
    $rest = substr($texto, -2); // devuelve "ef"
    echo "Resultado: $rest <br>";
    $rest = substr($texto, -3, 1); // devuelve "d"
    echo "Resultado: $rest <br>";
    $rest = substr($texto, 0, -1); // devuelve "abcde"
    echo "Resultado: $rest <br>";
    $rest = substr($texto, 2, -1); // devuelve "cde"
    echo "Resultado: $rest <br>";
    $rest = substr($texto, -3, -1); // devuelve "de"
    echo "Resultado: $rest <br>";


    // Convertir en mayúscula , minúscula
    // strtolower ( string $texto ): string minusculas
    // strtoupper ( string $texto ): string mayusculas
    echo "<h2>Texto a MAYÚSCULA y minúscula</h2>";
    $texto = "ARGENTINA PROGRAMA";
    echo "Texto original: $texto <br>";
    $texto = strtolower($texto);
    echo "Texto en minúscula: $texto <br>"; // imprime "argentina programa"
    //--------
    $texto = "argentina programa";
    echo "Texto original: $texto <br>";
    $texto = strtoupper($texto);
    echo "Texto en mayúscula: $texto <br>"; // imprime "ARGENTINA PROGRAMA"



    //Eliminar espacios en blanco
    //ltrim( ), rtrim( ) y trim()
    echo "<h2>Eliminación de espacios en blanco</h2>";
    $texto = " argentina programa ";
    echo "Texto original: '$texto' <br>";
    $texto = trim($texto);
    echo "Texto final: '$texto' <br>";
    // devuelve "argentina programa"
    // -----
    $texto = " argentina programa ";
    echo "Texto original: '$texto' <br>";
    $texto = ltrim($texto);
    echo "Texto final: '$texto' <br>";
    // devuelve "argentina programa "
    // -----
    $texto = " argentina programa ";
    echo "Texto original: '$texto' <br>";
    $texto = rtrim($texto);
    echo "Texto final: '$texto' <br>";
    // devuelve " argentina programa"



    //De una cadena formar un array de caracteres individuales
    //str_split(string $texto, int $limite = 1): array
    echo "<h2>Formar array de caracteres</h2>";
    $texto = "Hola a todos";
    echo "Texto original: $texto <br>";
    $arr = str_split($texto);
    print_r($arr);
    /* imprime 
    Array
    (
        [0] => H
        [1] => o
        [2] => l
        [3] => a
        [4] => 
        [5] => a
        [6] => 
        [7] => t
        [8] => o
        [9] => d
        [10] => o
        [11] => s
    )
    */


    // Operaciones matemáticas
    echo "<h2>Operaciones Matemáticas</h2>";
    // abs() valor absoluto
    $a=-5.356;
    echo "El valor absoluto de $a es " . abs($a) . "<br>";
    // round() redondeo
    echo "El número con dos cifras decimales de $a es " . round($a,2) . "<br>";
    // sqrt() raiz cuadrada
    $b=25;
    echo "La raiz cuadrada de $b es " . sqrt($b) . "<br>";
    // max() y min() máximo y mínimo 
    $lista = array(2,3,4,5,9,6);
    echo "El máximo es " . max($lista) . "<br>";
    echo "El mínimo es " . min($lista) . "<br>";
    // rand() número entero aleatorio
    echo "Número aletorio entre 1 y 100: ". rand(1,100) . "<br>";
    // pow() potencia
    $a=2;
    $b=3;
    echo "$a elevada a $b es " . pow($a,$b) . "<br>";
    


    // operaciones sobre variables
    // empty() evaluar si una variable está vacía
    echo "<h2>Operaciones sobre variables</h2>";
    $var = false;
    if (empty($var)) {
        echo "\$var está vacía <br>";
    }else{
        echo "\$var no está vacía <br>";
    }
    // is_null() evaluar si la variable en null
    $lista = array(2,3,4,5,9,6);
    if (is_null($var)) {
        echo "\$var es null <br>";
    }else{
        echo "\$var no es null <br>";
    }
    //is_array() evalúa si la variable pasada es un array
    $lista = array(2,3,4,5,9,6);
    if (is_array($lista)) {
        echo "\$var es array <br>";
    }else{
        echo "\$var no es array <br>";
    }
    //implode() formar string de un array
    $autos = ['Renault', 'Fiat', 'Peugeot'];
    $listado_de_autos = implode(", ", $autos);
    echo "Listados de autos disponibles: $listado_de_autos <br>";
    // var_dump() información sobre variable
    $var1=12;
    $var2=12.3;
    $var3="Argentina Programa";
    $var4=array('Renault', 'Fiat', 'Peugeot');
    echo var_dump($var1) . "<br>";


    // date() devuelve fecha en formato especificado
    echo date("d-m-Y H:i:s"); 

    ?>
</body>
</html>