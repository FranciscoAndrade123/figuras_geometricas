<?php
 
 class operaciones{
    public $num1;
    public $num2;

    public function sumar($num1,$num2){
        $this->$num1=$num1;
        $this -> $num2=$num2;

        $resultado_suma =  $num2 + $num1;
        return $resultado_suma;
    }

    public function resta($num1,$num2){
        $this->$num1=$num1;
        $this -> $num2=$num2;

        $resultado_resta =  $num2 - $num1;
        return $resultado_resta;
    }

    public function multiplicacion($num1,$num2){
        $this->$num1=$num1;
        $this -> $num2=$num2;

        $resultado_multiplicacion =  $num2 * $num1;
        return $resultado_multiplicacion;
    }

    public function division($num1,$num2){
        $this->$num1=$num1;
        $this -> $num2=$num2;

        $resultado_division =  $num2 / $num1;
        return $resultado_division;
    }

 }

?>