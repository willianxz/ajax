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
        
        
         if(isset($_GET['fnome']) && isset($_GET['fsobrenome'])){
           $nome= $_GET['fnome'];
           $sobrenome = $_GET['fsobrenome'];
       
            echo 'Seu nome é: '.$nome.' '.$sobrenome;
        }
        
        
        
        ?>
    </body>
</html>
