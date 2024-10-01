<?php  

  class Valores{
    private $dias;
    private $valorDia;

    public function __construct($dias,$valorDia){
        $this->dias = $dias;
        $this->valorDia = $valorDia;
    }

    public function setDias($dias){
       $this ->dias = $dias;
    }

    public function getDias(){
        return $this->dias;
    }

    public function setValorDias($valorDias){
        $this ->valorDia = $valorDias;
    }

    public function getValorDia(){
        return $this ->valorDia;
    }

  }

?>