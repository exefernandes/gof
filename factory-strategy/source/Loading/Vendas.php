<?php
namespace Source\Loading;

class Vendas
{
    private $valor;

    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}