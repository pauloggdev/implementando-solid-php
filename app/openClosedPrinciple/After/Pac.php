<?php

namespace App\openClosedPrinciple\After;

use App\openClosedPrinciple\After\Frete;

class Pac extends Frete
{
    public function getValorFrete(): float
    {
        if ($this->pedido->getValorItems() > 120.00) {
            return 0;
        }
        return $this->pedido->getPesoTotal() * 1.5;
    }
    public function getDataEntrega(): \DateTimeInterface
    {
        return $this->pedido->getData()->modify('+15 days');
    }
}
