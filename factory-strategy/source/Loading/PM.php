<?php

namespace Source\Loading;

class PM implements DescontoInterface
{
    public function calcula(Vendas $vendas)
    {
        return $vendas->getValor() * 0.70;
    }
}