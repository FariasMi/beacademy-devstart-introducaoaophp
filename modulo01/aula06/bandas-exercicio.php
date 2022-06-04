<?php
    $bandas = [
       ['Bring Me The Horizon', 20],
       ['Twenty One Pilots',15],
       ['Big Bang', 10],
       ['My Chemical Romance', 2],
       
    ];

    echo  $bandas[0][0];

    foreach($bandas as $banda){
        foreach($banda as $musica){
            echo 'Banda: '.$banda .'Quantidade de músicas:' .$musica;
        }
    }







?>