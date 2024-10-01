<?php

class Calcular_pago {
    private $valores;
    public $salario;
    public $arl;
    public $salud;
    public $pension;
    public $deducible;
    public $pagoTotal;

  
    public function __construct(Valores $valores) {
        $this->valores = $valores;
    }


    public function salario_persona() {
        $this->salario = $this->valores->getValorDia() * $this->valores->getDias();
        return $this->salario;
    }


    public function arl_persona() {
        $this->arl = $this->salario * 0.052;
        return $this->arl;
    }

    public function salud_persona() {
        $this->salud = $this->salario * 0.12;
        return $this->salud;
    }


    public function pension_persona() {
        $this->pension = $this->salario * 0.15;
        return $this->pension;
    }


    public function deducible_persona() {
        $this->deducible = $this->arl + $this->salud + $this->pension;
        return $this->deducible;
    }


    public function pagoTotal_persona() {
        $this->pagoTotal = $this->salario - $this->deducible;
        return $this->pagoTotal;
    }
}

?>
