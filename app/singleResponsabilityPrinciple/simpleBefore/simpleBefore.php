<?php

namespace App\singleResponsabilityPrinciple\simpleBefore;


class Funcionario
{


    private $nome;
    private $matricula;
    private $salarioBruto;


    public function __construct(string $nome, string $matricula, float $salarioBruto)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->salarioBruto = $salarioBruto;
    }


    public function calcularINSS(): float
    {
        $inss = 0;
        switch (true) {
            case ($this->salarioBruto <= 1751.81):
                $inss = 8;
                break;
            case ($this->salarioBruto >= 1751.82 && $this->salarioBruto <= 2919.72):
                $inss = 9;
                break;
            default:
                $inss = 11;
                break;
        }
        return round(($inss / 100) * $this->salarioBruto, 2);
    }
}

// $f1 = new Funcionario("Ayla Cristina", "84897", 3000.00);

// echo $f1->calcularINSS();
