<?php 
 include("linkhome.php");

 echo strtoupper("<center><h3> ejercicio 1 </h3></center><br>");


 if($_POST && $_POST["cadena"] && strlen($_POST["cadena"]) < 80 ) {
 
   echo strtoupper(trim($_POST["cadena"]));
 
} else if (!$_POST) {

   echo "no se ha recibido el formulario";

} else if (!$_POST["cadena"]) {

   echo "el campo enviado esta vacio";

} else if( !(strlen($_POST["cadena"]) < 80 )  ) {

   echo "la cadena debe ser de menos de 80 caracteres";

}


/*
 if($_POST) {
    
    if($_POST["cadena"]) {
    
        $ca = $_POST["cadena"];
        
        if(strlen($ca) < 80) {
            echo strtoupper(trim($ca));

        } else {
            echo "la cadena debe ser de menos de 80 caracteres";
        }

    } else {
        echo "el campo enviado esta vacio";
    }


 } else {
    echo "no se ha recibido el formulario";

 }
*/
?>