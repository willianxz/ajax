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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <script>
        
        $(document).ready(function(){
            
           $.get("arquivoJqueryGet.php", 
           {nome: "Willian", cidade: "Florianópolis"}, 
           function(resposta){
            //alert(resposta);
            $("#meuparagrafo").html(resposta);
         });
            
           
        });
        
        </script>
        
        
        <div id='meuparagrafo'></div>
        
    </body>
</html>
