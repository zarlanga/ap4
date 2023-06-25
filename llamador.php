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

$nombre = "pepe";
$total_ej = 5;
$nro_tp = 6;
$plantilla = fread($file, filesize($origen ) );


for ($ej = 1; $ej <= $total_ej; $ej++){
    $pepe = $plantilla;
    
    $buscar = array("\/*nombre*\/",
        "\/*nro_tp*\/",
        "\/*nro_ej*\/",
        "\/*total_ej*\/");

    $reemplazar = array($nombre,
        $nro_tp,
        $ej,
        $total_ej);

    $pepe = str_replace($buscar, $reemplazar, $pepe);

    $nuevoarchivo = "ej_$ej.php";
    //estosevadescontrolarrr
    $aveh = fopen($nuevoarchivo, "w" ) or die ("pasaron cosas");

    fwrite($aveh, $pepe);
}
echo "coso<br>";
echo "recoso<br>";
echo "hypercoso";
echo "estoyasedescontrolooh";
?>