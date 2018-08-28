<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("button").click(function(){
               
       $.get("arquivoJson.json", function(dados, status){
           alert("Dados: " + dados+ "\nStatus: " + status);
                      
           $('div').append(dados.clientes[0].nome);
           $('div').append(dados.clientes[0].sobrenome);
           $('div').append('<hr/>');
           $('div').append(dados.clientes[1].nome);
           $('div').append(dados.clientes[1].sobrenome);
           $('div').append('<hr/>');
           $('div').append(dados.clientes[2].nome);
           $('div').append(dados.clientes[2].sobrenome);
           $('div').append('<hr/>');
           $('div').append(dados.clientes[3].nome);
           $('div').append(dados.clientes[3].sobrenome);
           $('div').append('<hr/>');
           $('div').append(dados.clientes[4].nome);
           $('div').append(dados.clientes[4].sobrenome);
           
           
       });
       
            
    });
});
</script>
</head>
<body>

    <div></div>
<button>Send an HTTP GET request to a page and get the result back</button>

</body>
</html>

