<?php
namespace App\openClosedPrinciple\After;

abstract class Frete{
    
    protected Pedido $pedido;

    public function getPedido(): Pedido
    {
        return $this->pedido;
    }
    public function setPedido(Pedido $pedido): self
    {
        $this->pedido = $pedido;
        return $this;
    }
    public abstract function getValorFrete():float;
    public abstract function getDataEntrega():\DateTimeInterface;
}