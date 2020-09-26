<?php
namespace Source\Loading\Tipos;

use Source\Loading\DescontoInterface;
use Source\Loading\Vendas;

class BM implements DescontoInterface
{
    public function calcula(Vendas $vendas)
    {
        return $vendas->getValor() * 0.60;
    }
}