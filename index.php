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
    //crear formulario 
//ubicar los archivos nuevos en tpx-nombre
//corregir las llamadas a inclu dentro de la plantilla o copiar los archivos a la carpeta
//recibir el formulario y validar
//pasarlo a objeto?
//hacer que no cree los archivos si ya existen
//hacer el ejercicio propiamente dicho lol XD


$origen = "plantilla.php";


$file = fopen($origen, "r");

$nombre = "Roberto Zitto";
$total_ej = 5;
$nro_tp = 4;
$plantilla = fread($file, filesize($origen ) );


for ($ej = 1; $ej <= $total_ej; $ej++){
    $pepe = $plantilla;
    
    $buscar = array("**nombre**",
        "**nro_tp**",
        "**nro_ej**",
        "**total_ej**");

    $reemplazar = array($nombre,
        $nro_tp,
        $ej,
        $total_ej);

    $pepe = str_replace($buscar, $reemplazar, $pepe);

    $nuevoarchivo = "ej_$ej.php";
    //estosevadescontrolarrr
    $aveh = fopen($nuevoarchivo, "x+" ) or die ("pasaron cosas");

    fwrite($aveh, $pepe);
}

echo "no exploto";
    ?>

</body>
</html>