<?php
    $notasCursoA =[
        10,
        9,
        9.5,
        7,

    ];

    $notasCursoB=[
        10,
        8,
        7.5,
        6,

    ];

    function mediaDeNotas(array $notas):float{
        //$total = $array_sum($notas);
        //$quantidade = count($notas); 

        //foreach($notas as $cadaNota){
        //    $total += $cadaNota;
        //}
        

        return array_sum($total)/count($quantidade);
    }

echo mediaDeNotas($notasCursoA).PHP_EOL;

