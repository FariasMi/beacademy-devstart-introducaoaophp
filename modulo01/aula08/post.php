<form action="" method="post">
    <input type="text" name="nome" placeholder= "Digite o seu nome">
    <button>Enviar</button>

</form>
<?php
    if($_POST){
        echo $_POST['nome'];
    }
?>