<?php

namespace App\singleResponsabilityPrinciple\simpleAfter;


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
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of salarioBruto
     */
    public function getSalarioBruto()
    {
        return $this->salarioBruto;
    }

    /**
     * Set the value of salarioBruto
     */
    public function setSalarioBruto($salarioBruto): self
    {
        $this->salarioBruto = $salarioBruto;

        return $this;
    }
}
