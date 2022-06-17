<?php

namespace App\singleResponsabilityPrinciple\simpleAfter;

class CalculadoraSalarial
{

    private Funcionario $funcionario;

    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function calcularINSS(): float
    {
        $inss = 0;
        $salarioBruto = $this->funcionario->getSalarioBruto();
        switch (true) {
            case ($salarioBruto <= 1751.81):
                $inss = 8;
                break;
            case ($salarioBruto >= 1751.82 && $salarioBruto <= 2919.72):
                $inss = 9;
                break;
            default:
                $inss = 11;
                break;
        }
        return round(($inss / 100) * $salarioBruto, 2);
    }

    public function calcularIRPF()
    {
        //implementar outro calculo salarial
    }
}
