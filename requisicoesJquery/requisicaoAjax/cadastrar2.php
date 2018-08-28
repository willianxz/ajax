<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            
            echo '<h1>Deu certo!</h1>';
            echo '<p>Nome: '.$nome.'</p>';
            echo '<p>Sobrenome: '.$sobrenome.'</p>';
        }else{
            echo 'Nenhum dado enviado.';
        }
        
        ?>
    </body>
</html>
