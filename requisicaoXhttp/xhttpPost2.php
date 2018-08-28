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
        
        <h2>AJAX PASSANDO PARAMETROS OCULTOS COM POST </h2>

        <button type="button" onclick="loadDoc()">Request data</button>

        <p id="demo"></p>

        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                };
                xhttp.open("POST", "arquivoPost2.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //Se não tiver isso ele não enviara os dados.
                xhttp.send("fnome=Henry&fsobrenome=Ford");// Aqui é os elementos do formulario.

            }
        </script>

    </body>
</html>

