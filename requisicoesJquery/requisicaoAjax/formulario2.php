<!DOCTYPE html> <!-- https://www.airpair.com/js/jquery-ajax-post-tutorial ESSE TESTE PARECE QUE VAI FUNCIONAR.-->
<html>
<head>
    <title>jQuery AJAX POST Form</title>
    <meta charset="utf-8">
</head>
<body>

<div id="response">
    <pre></pre>
</div>

<form id="my-form">
    <input type="text" id="nome" name="nome" placeholder="nome" />
    <input type="text" id="sobrenome" name="sobrenome" placeholder="sobrenome" />

    <button type="submit">Submit</button>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    (function($){
        function processForm( e ){
            $.ajax({
                url: 'cadastrar2.php',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: $(this).serialize(),
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#my-form').submit( processForm );
    })(jQuery);
</script>



</body>
</html>