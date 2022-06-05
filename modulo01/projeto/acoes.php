<?php
    function login(){
        include 'telas/login.php';

    }

    function cadastro(){
        include 'telas/cadastro.php';
        if($_POST){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = password_hash($_POST['senha'],PASSWORD_ARGON2I);

            $arquivo = fopen('dados/contatos.csv', 'a+');           

            
            fwrite($arquivo,"{$nome};{$email};{$telefone};{$senha}".PHP_EOL);

            fclose($arquivo);

            $mensagem = 'Pronto, cadastro realizado';

            include 'telas/mensagem.php';
        }    

    }

    function home(){
         
        include 'telas/home.php';

    }

    function listar(){
        $contatos = file('dados/contatos.csv'); 

        include 'telas/listar.php';

    }

    function relatorios(){
        include 'telas/relatorios.php';

    }
    function admin(){
        include 'telas/admin.php';

    }

    function erro404(){
        include 'telas/404.php';

    }

    function excluir(){
        $id = $_GET['id'];
        
        $contato = file('dados/contatos.csv');

        unset($contatos[$id]);

        unlink('dados/contatos.csv');
 
        $arquivo = fopen('dados/contatos.csv','a+');


        foreach($contatos as $contato){
            fwrite($arquivo,$contato);
        }
        $mensagem = 'Pronto, contato excluído';
        include 'telas/mensagem/php';
    }

    function editar(){
        
        $id = $_GET['id'];

       $contatos = file('dados/contatos.csv');

       if($_POST){
           $nome = $_POST['nome'];
           $email = $_POST['email'];
           $telefone = $_POST['telefone'];
           $senha = password_hash($_POST['senha'],PASSWORD_ARGON2I);

          $contatos[$id] = "{$nome};{$email};{$telefone};{$senha}".PHP_EOL;

          unlink('dados/contatos.csv');

          $arquivo = fopen('dados/contatos.csv','a+');

          foreach($contatos as $contato){
              fwrite($arquivo,$contato);
          }

          fclose($arquivo);

          $mensagem =  'Contato atualizado com sucesso!';
          include 'telas/mensagem.php';
       }

       

       $dados = explode(';',$contatos[$id]);

        include 'telas/editar.php';
    }






?>