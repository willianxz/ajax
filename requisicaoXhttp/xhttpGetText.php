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

        <h2>REQUISIÇÃO DE UM TEXTO COM GET</h2>

        <button type="button" onclick="loadDoc()">Request data</button>

        <p id="inserirAqui"></p>


        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest(); //Cria o objeto Ajax
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("inserirAqui").innerHTML = this.responseText; //Procura o elemento e insere nele a resposta.
                    }
                };
                xhttp.open("GET", "arquivoText.txt", true); //Aqui ele faz uma requisição GET ao arquivoText.txt
                xhttp.send(); //Ele envia essa requisição.
            }
        </script>

    </body>
</html>

