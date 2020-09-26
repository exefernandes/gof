<?php

class PC implements DescontoInterface
{
    public function calcula(Vendas $vendas)
    {
        return $vendas->getValor() * 0.90;
    }
}