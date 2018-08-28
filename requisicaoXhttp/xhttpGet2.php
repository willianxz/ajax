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
        
        <h2>AJAX PASSANDO PARAMETROS GET PELA URL</h2>

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
                xhttp.open("GET", "arquivoGet2.php?fnome=Henry&fsobrenome=Fordy", true);
                xhttp.send();
            }
        </script>

    </body>
</html>

