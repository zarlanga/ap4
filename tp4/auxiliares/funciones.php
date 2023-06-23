<?php
echo  "pepe";
$ca = "";
function validar(&$ca = $ca) {
    if($_POST && $_POST["cadena"] ) {
        $cad = $_POST["cadena"];
        return true;

    } else if (!$_POST) {

        echo "no se ha recibido el formulario";
        return false;
    
    } else if (!$_POST["cadena"]) {
    
        echo "el campo enviado esta vacio";
        return false;
    }
}
 ?>