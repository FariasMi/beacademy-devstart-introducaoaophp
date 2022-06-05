<?php
    $arquivo = fopen('produtos.csv','a+');

    fwrite($arquivo, 'Tanjiro'.PHP_EOL);
    fwrite($arquivo, 'Nesuko' .PHP_EOL);
    fwrite($arquivo, 'Zenitsu'.PHP_EOL);
    fwrite($arquivo, 'Inosuke'.PHP_EOL);

    fclose($arquivo);
    


?>