<?php
namespace App\openClosedPrinciple\After;

use App\openClosedPrinciple\After\Item;

class Pedido
{

    private \DateTimeInterface $data;
    private array $items;
    private Frete $frete;

    public function __construct(\DateTimeInterface $data,array $items, Frete $frete)
    {
        $this->data = $data;
        $this->items = $items;
        $this->frete = $frete;
        $this->frete->setPedido($this);
    }

    public function getPesoTotal(): float
    {
        return array_reduce($this->items, function ($soma, Item $item) {
            return $soma + $item->peso;
        });
    }

    public function getValorItems()
    {
        return array_reduce($this->items, function ($soma, Item $item) {
            return $soma + $item->valor;
        });
    }

    /**
     * Get the value of data
     *
     * @return \DateTimeInterface
     */
    public function getData(): \DateTimeInterface
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @param \DateTimeInterface $data
     *
     * @return self
     */
    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of items
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @param array $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get the value of frete
     *
     * @return Frete
     */
    public function getFrete(): Frete
    {
        return $this->frete;
    }

    /**
     * Set the value of frete
     *
     * @param Frete $frete
     *
     * @return self
     */
    public function setFrete(Frete $frete): self
    {
        $this->frete = $frete;

        return $this;
    }
}