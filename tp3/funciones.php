<?php

//ejercicio 1
function procesarformulario1() {
    reset($_POST);
    $k = key($_POST);
    if (validarFormulario($_POST[$k]))
    echo "el producto de los dos valores es " . $_POST["valor_1"] * $_POST["valor_2"];
    else echo "falta un valor";
}

 // no entiendo muy bien que pasa aca
 // parece funcionar en lo que respecta al resultado 
 // pero tira error en el caso positivo
 // me complique haciendolo asi pq hace mucho que no practico y queria ejercitar
 // deberia haber usado un for each pero es lo ultimoq ue hice y no queria postergar la entrega
function validarFormulario($el){
    
    if (!key($_POST)) return true;
    next($_POST);
    $nextK = key($_POST);
    return !empty($el) && validarFormulario($_POST[$nextK]);
    
}

//ejercicio 2
function procesarformulario4() {
    next($_POST);
    $k = key($_POST);
    echo calculoFormulario4($_POST[$k]);

}

function calculoformulario4($n) {
    //funcion que recibe parametros 
    $testo = "El numero enviado es <span>";
    $testo .= ($n % 2 == 0) ? "par" : "impar";
    $testo .= "</span>";
    return $testo;
}

//ejercicio 3
function calculoformulario5($n){
    if ($n == 0) return 0;
    else return $n + calculoformulario5($n -1);
}

function procesarformulario5(){
    next($_POST);
    $k = key($_POST);
    $nro = calculoFormulario5($_POST[$k]);
    echo "La suma de todos los valores inferiores al nro ingresado es <span>$nro</span>";

}


//ejercicio 4
function funcionformulario6($texto){
    return strtoupper($texto);
}

function procesarformulario6(){
    next($_POST);
    $k = key($_POST); 
    $ret = funcionformulario6($_POST[$k]);
    echo $ret;
}

//ejercicio 5
function calculosformulario7($n) {
    $return["Perimetro"] = $n * 4;
    $return["Area"] = $n * $n;
    return $return;
}

function procesarformulario7(){
    next($_POST);
    $k = key($_POST); 
    $resultados = calculosformulario7($_POST[$k]);
    //echo '<script> alert("hola") </script> ';
    echo "<script> alert('";
    echo " Para un cuadrado de lado " . $_POST[$k];
    echo "\\n su perimetro es " . $resultados["Perimetro"] ;
    echo "\\n y su area es " . $resultados["Area"] ;
    echo "\\n (esto se vale?)";
    echo "') </script>";

}



// experimentos
function dirigirFormulario(){
        if ( !empty($_POST) ) { //aca haria falta un isset? asi parece funcionar
            reset($_POST);
            $k = key($_POST); 
            //
            //tengo una aversion patologia hacia los switchs XD

            if ($_POST[$k] == "formulario_1") procesarformulario1();
            if ($_POST[$k] == "formulario_2") procesarformulario2();
            if ($_POST[$k] == "formulario_3") procesarformulario3();
            if ($_POST[$k] == "formulario_4") procesarformulario4();
            if ($_POST[$k] == "formulario_5") procesarformulario5();
            if ($_POST[$k] == "formulario_6") procesarformulario6();
            if ($_POST[$k] == "formulario_7") procesarformulario7();
        } else {
            reset($_POST);
            echo "nohaypost";
            $k = key($_POST);
            //$v = $_POST[$k] == "formulario_2"; //ACA tira el error si no hay formulario!
        }
    }



    function procesarformulario3(){

        $suma = 0;
        next($_POST);

        while(key($_POST)) {
            
            $k = key($_POST);

            if ( empty($_POST[$k]) )  { 
                echo "<span>el campo ";
                echo $k;
                echo "esta vacio</span> <br>";
            } else {
                echo "el  $k es  $_POST[$k] <br>";
                $suma += $_POST[$k] ;
            }

            //no pongo el next como condicion del while pq
            // cuando lo hacia y el siguiente valor era nulo me coraba el while 
            next($_POST); 
        }
        echo "la suma de los valores es $suma";
    }

    function procesarformulario2(){
        next($_POST);
        $k = key($_POST);
        
        $testo = "<form action='#' method='post'>";
        $testo .= '<input type="text" name="formulario_3" value="formulario_3" id="" readonly>';
        for ($i = 0; $i < $_POST[$k]; $i++) {
            $testo .= "<input type='text' name='valor_$i' id='valor_$i' placeholder='valor_$i'>";
        }
        $testo .= '<input type="submit" value="Enviar">';

        $testo .= "</form>";

        echo $testo;

    }


    function saltodelinea() {
        echo "<br>";
    }

?>