<?php
    $bandas = [
        'Big Bang', //0
        'Peripehry', //1
        'Bring me the Horizon', //2
        'Emery', //3
        'Iron Maiden', //4
    ];

    $bandas[100] = 'Nirvana';
    $bandas[9] = 'Calcinha preta';


    $bandas[2] = 'Turma do Pagode';
    
    echo '<ul>';

    foreach($bandas as $banda){
        echo "<li>{$banda}</li>";
    }
    
    /*
    for($n=0;$n<=3;$n++){
        echo '<li>' .$bandas[$n]. '</li>';
    }
    */
    echo '</ul>';

?>

