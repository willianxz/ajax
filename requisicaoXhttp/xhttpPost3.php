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
        
        <h2>AJAX PASSANDO PARAMETROS OCULTOS COM POST,PEGANDO OS ELEMENTOS CM JQUERY </h2>
        
          Nome:
        <input type="text" name="fnome"/></br>
        Sobrenome:
        <input type="text" name="fsobrenome"/></br>
        
        
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
                xhttp.open("POST", "arquivoPost3.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //Se não tiver isso ele não enviara os dados.
                xhttp.send("fnome="+$("input[name='fnome']").val()+"&+fsobrenome="+$("input[name='fsobrenome']").val());// Aqui é os elementos do formulario.

            }
        </script>

    </body>
</html>

