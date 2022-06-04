<?php
    $url =  $_SERVER['REQUEST_URI'];

    if($url === '/'){
        echo '<h1>Pagina inicial</h1>';
    }elseif($url === '/login'){
        echo '<h1> Pagina de Login</h1>';
    }elseif($url=== '/cadastro'){
        echo'<h1>Pagina de Cadastro</h1>';
    }else{
        echo '<h1>Página não encontrada</h1>';
    }

?>