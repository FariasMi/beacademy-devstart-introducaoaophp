<?php

declare(strict_types=1);
function mostarNome(array $nomes):void{
    foreach($nomes as $cadaNome){
        echo "Nome: ".$cadaNome.PHP_EOL;
    }
}

mostrarNome(['Joaquim','Luiza','Filomena']);
mostrarNomes('teste');