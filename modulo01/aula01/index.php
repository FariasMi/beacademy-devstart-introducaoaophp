<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 :PHP</title>
</head>
<body>
    
<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Nome"></br>
    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" placeholder="Cidade"></br>
    <button>Enviar</button>
</form>

<?php
    if($_POST){
        echo "Oi" .$_POST['nome'];
    }
?>
</body>
</html>