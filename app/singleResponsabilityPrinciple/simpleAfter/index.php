<?php

namespace App\singleResponsabilityPrinciple\simpleAfter;

require_once '../../../vendor/autoload.php';


$funcionario = new Funcionario("Ayla Cristina", "84897", 3000.00);
$calculadoraSalarial = new CalculadoraSalarial($funcionario);
echo $calculadoraSalarial->calcularINSS();
