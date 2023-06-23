<?php
$origen = "plantilla.php";


$file = fopen($origen, "r");

$nombre = "pepe";
$total_ej = 5;
$nro_tp = 6;
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
    $aveh = fopen($nuevoarchivo, "w" ) or die ("pasaron cosas");

    fwrite($aveh, $pepe);
}
echo "coso<br>";
echo "recoso<br>";
echo "hypercoso";
echo "estoyasedescontrolooh";
?>