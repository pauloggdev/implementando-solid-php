<?php

namespace App\openClosedPrinciple\After;

use App\openClosedPrinciple\After\Item;


require_once '../../../vendor/autoload.php';

$pedido = new Pedido(new \DateTime(), [new Item(40.50, 2), new Item(90.20, 18)], new Sedex());
echo $pedido->getFrete()->getValorFrete();
echo "<br>";

echo $pedido->getFrete()->getDataEntrega()->format("d/m/y");
