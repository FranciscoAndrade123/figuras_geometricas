<?php

include('calcular_pago.php');
include('salario.php');


$info = file_get_contents("php://input");
$dataValores = json_decode($info, true);

$valoresPersona = new Valores($dataValores['diasTrabajado'], $dataValores['valorDia']);


$pagoTotal = new Calcular_pago($valoresPersona);


$salario = $pagoTotal->salario_persona();
$arl = $pagoTotal->arl_persona();
$salud = $pagoTotal->salud_persona();
$pension = $pagoTotal->pension_persona();
$deducible = $pagoTotal->deducible_persona();
$pagoFinal = $pagoTotal->pagoTotal_persona();

$response = [
    "Salario" => $salario,
    "ARL" => $arl,
    "Salud" => $salud,
    "Pension" => $pension,
    "Deducible" => $deducible,
    "PagoTotal" => $pagoFinal
];

header('Content-Type: application/json');
echo json_encode($response);

?>
