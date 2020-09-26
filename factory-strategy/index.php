<?php
    require "source/autoload.php";

    $vendaCarro = new \Source\Loading\Vendas(40000);

    $bm = new \Source\Loading\CalculadoraDescontoFactory();
    $valorBm = $bm->calcula($vendaCarro,new \Source\Loading\BM());

    $pm = new \Source\Loading\CalculadoraDescontoFactory();
    $valorPm = $pm->calcula($vendaCarro,new \Source\Loading\PM());

    $pc = new \Source\Loading\CalculadoraDescontoFactory();
    $valorPc = $pc->calcula($vendaCarro,new \Source\Loading\PC());

    echo 'Valor total da compra:'.$vendaCarro->getValor();
    echo '<br>-----------</br>';
    echo 'Valor da compra para BM: '.$valorBm;
    echo '<br/>';
    echo 'Valor da compra para PM: '.$valorPm;
    echo '<br/>';
    echo 'Valor da compra para PC: '.$valorPc;