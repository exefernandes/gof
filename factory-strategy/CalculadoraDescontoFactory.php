<?php

class CalculadoraDescontoFactory
{
    public function calcula(Vendas $vendas,DescontoInterface $tipo)
    {
            return $tipo->calcula($vendas);
    }
}