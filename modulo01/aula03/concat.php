<?php
 $nome = "Tanjiro";
 $sobrenome = "Kamado";
 $idade = 13;
 $cidade = "Okutama";

 $nome2 = "Nezuko";
 $nome2 .= "Kamado"; //NezukoKamado

 echo $nome ." ". $sobrenome;
 echo "Eu me chamo " . $nome . " " .$sobrenome . " tenho" . $idade . "anos e moro em " . $cidade;

echo "</br>";

// template só funciona com aspas duplas.
echo "Eu me chamo {$nome}, tenho {$idade} anos e moro em {$cidade}";
