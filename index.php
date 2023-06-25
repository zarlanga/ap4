<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Generador de archivos de ejercicios</h1>

    <form action="#" method="post">
        <input type="text" name="nombre" id="" placeholder="nombre del alumno" required>
        <br>
        <br>
        <input type="number" name="nro_tp" id="" min="1" max="30" step="1" placeholder="numero de tp" required>
        <br>
        <br>
        <input type="number" name="total_ej" id="" min="1" max="10" step="1" placeholder="cantidad de ejercicios" required>
        <br>
        <br>
        <input type="submit" value="Generar archivos">
    
    </form>
    <br>
    <br>
    
    <?php
    
//copiar a la carpeta funciones.php? y el navcreator.php?
//pasarlo a objeto?
//hacer el ejercicio propiamente dicho lol XD

    if(!$_POST) {
        echo "no se ha recibido formulario<br>";
    } else {

        $origen = "inclu/plantilla.php"; //deberia cambiarlo a txt para que no tire error?


        $file = fopen($origen, "r");

        [$nombre, $nro_tp, $total_ej] = array($_POST["nombre"], $_POST["nro_tp"], $_POST["total_ej"]);
        
        $total_ej = $total_ej <= 10 ? $total_ej : 10; //verificar que no cree mas de 10 archivos
        
        //reemplazar los espacios por guion bajo? ahora anda y me da miedo cambiarlo
        
        /*
        $nombre = "Roberto Zitto";
        $total_ej = 5;
        $nro_tp = 4;
        */

        $plantilla = fread($file, filesize($origen ) );

        $carpeta = "$nombre-tp-$nro_tp";

        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
        }


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
            

            $nuevoarchivo = "$carpeta/ej_$ej.php";
            //estosevadescontrolarrr
            $aveh = fopen($nuevoarchivo, "x+" ) or die ("<br>ARCHIVO YA EXISTENTE O NO HAY ACCESO");

            fwrite($aveh, $pepe);
           
        }

        echo "<a href='" . $carpeta . "/ej_1.php' > ir a ejercicio 1 </a>";

    }
    ?>

</body>
</html>