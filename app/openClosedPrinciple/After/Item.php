<?php
namespace App\openClosedPrinciple\After;

class Item
{

    public float $valor;
    public float $peso;


    public function __construct(float $valor, float $peso)
    {
        $this->valor = $valor;
        $this->peso = $peso;
    }
}