<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("button").click(function () {
                    $("#div1").load("arquivoText.txt"); //Irá carregar o arquivo texto.
                });
            });
        </script>
    </head>
    <body>

        <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

        <button>Get arquivoText</button>

    </body>
</html>

