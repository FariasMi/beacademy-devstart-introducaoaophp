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
    <label for="numero">Número:</label>
    <input type="number" name="numero1" placeholder="Digite um número"></br>
    <label for="numero">Número:</label>
    <input type="number" name="numero2" placeholder="Digite outro número"></br>

    <button name="soma">Somar</button>
    <button name="subtracao">Subtrair</button>
    <button name="multiplicacao">Multiplicar</button>
    <button name="divisao">Dividir</button>
</form>

<?php
    if($_POST){

        if(isset($_POST['soma'])){
            echo $_POST['numero1'] + $_POST['numero2'];
        }

        if(isset($_POST['subtracao'])){
            echo $_POST['numero1'] - $_POST['numero2'];
        }
      
        if(isset($_POST['multiplicacao'])){
            echo $_POST['numero1']  *  $_POST['numero2'];
        }
      
        if(isset($_POST['divisao'])){
            if($_POST['numero1'] == 0){
                echo "Não é possível divisão por zero 😅";
            } else{
                echo $_POST['numero1']/ $_POST['numero2'];
            }
            
        }
      
      
   
     
    }
?>
</body>
</html>