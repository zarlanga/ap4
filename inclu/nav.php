<?php 

class NavCreator{
    private $cantidadDeEjercicios;

    public function __construct($n=5){
        $this->cantidadDeEjercicios = $n < 10 ? $n : 10 ;
    }

    public function generarnav() {
        $ret = "";
        $z = $this->cantidadDeEjercicios;
        for($i = 1; $i<= $z; $i++  ) {
            echo $this->generarLink($i) ;

        }
        
    }

    private function generarLink($n) {
        $ret = "<a href='ej_$n.php'> Ejercicio $n </a> -  ";
        return $ret;
    }
}


?>