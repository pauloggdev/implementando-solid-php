<?php
namespace App\openClosedPrinciple\After;

use App\openClosedPrinciple\After\Frete;
use DateTimeInterface;

class Sedex extends Frete{


    public function getValorFrete(): float
    {
        return $this->pedido->getPesoTotal() * 3;
    }

    public function getDataEntrega(): DateTimeInterface
    {
        return $this->pedido->getData()->modify('+5 days'); 
    }

    
}