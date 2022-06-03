<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio aula 05</title>
</head>
<body>
    <select name="" id="">
        <option selected> -- Selecione o ano -- </option>
     </select>

     <?php
        $ano = 2022;

        while($ano >= 1900){
            echo "<option>{$ano}</option>";
            $ano--;
        }
     ?>
    
</body>
</html>