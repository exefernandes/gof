<?php
namespace Source\Loading;

interface DescontoInterface
{
    public function calcula(Vendas $vendas);
}