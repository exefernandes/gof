<?php
    include "source/autoload.php";

    $vendaCarro = new \Source\Loading\Vendas(40000);

    $bm = new \Source\Loading\CalculadoraDescontoFactory();
    $valorBm = $bm->calcula($vendaCarro,new \Source\Loading\Tipos\BM());

    $pm = new \Source\Loading\CalculadoraDescontoFactory();
    $valorPm = $pm->calcula($vendaCarro,new \Source\Loading\Tipos\PM());

    $pc = new \Source\Loading\CalculadoraDescontoFactory();
    $valorPc = $pc->calcula($vendaCarro,new \Source\Loading\Tipos\PC());

    echo 'Valor total da compra:'.$vendaCarro->getValor();
    echo '<br>-----------</br>';
    echo 'Valor da compra para BM: '.$valorBm;
    echo '<br/>';
    echo 'Valor da compra para PM: '.$valorPm;
    echo '<br/>';
    echo 'Valor da compra para PC: '.$valorPc;