<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    

$(document).ready(function(){
    $("form").submit(function(){
        alert("Enviando para a conversão de led");
        var formData = {
            'token_rdstation'   : $('input[name=token_rdstation]').val(), 
            'identificador'     : $('input[name=identificador]').val(),
            'nome'              : $('input[name=name]').val(),           
            'email'             : $('input[name=email]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'https://www.rdstation.com.br/api/1.2/conversions', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'text', // what type of data do we expect back from the server
            encode      : true
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
}); 

/*
$(document).ready(function(){
    $(".um-button input[value='CADASTRAR']").click(function(){
        alert("OK TESTADO");        
    });
});*/
</script>
</head>
<body>

    <form action="" method="POST">    
        <input type="hidden" name="token_rdstation" value="xxxxxxx"/>
        <input type="hidden" name="identificador" value="formulario-site-com-teste"/>
        Nome:  <input type="text" name="name"/></br>
        Email: <input type="text" name="email"/></br>
       <!-- <button>Clique aqui</button> -->
       <input type="submit" class='um-button' value="CADASTRAR"> 
    </form>

</body>
</html>


