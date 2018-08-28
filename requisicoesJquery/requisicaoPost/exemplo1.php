<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        var formData = {
            'token_rdstation'   : 'xxxxxxxx', 
            'identificador'     : 'formulario-site-com-resultado', 
            'nome'              : 'TESTE CHAG',            
            'email'             : 'willian@chagbrasil.com'
        };

        // process the form
        $.post({
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
</script>
</head>
<body>

    <button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>


