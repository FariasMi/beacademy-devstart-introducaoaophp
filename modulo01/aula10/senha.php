<?php

$senha = '123456';
$code = 'MTIzNDU2';

//echo base64_encode($senha).PHP_EOL;
//echo base64_encode($code).PHP_EOL;

echo password_hash($senha,PASSWORD_ARGONI2I). PHP_EOL;