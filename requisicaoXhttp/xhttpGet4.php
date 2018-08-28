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

        <h2>REQUISIÇÃO COM GET</h2>

        <button type="button" onclick="loadDoc()">Request data</button>

        <p id="inserirAqui"></p>


        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest(); //Cria o objeto Ajax
                var resposta,texto;
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        resposta = this.responseText; //Procura o elemento e insere nele a resposta.
                        
                        //document.getElementById("inserirAqui").innerHTML = this.responseText; //Procura o elemento e insere nele a resposta.
                        alert(this.responseText);
                        document.$("#inserirAqui").html(this.responseText);
                        alert($('h1').text());
                    }
                };
                xhttp.open("GET", "SobreNos.html", true); //Aqui ele faz uma requisição GET ao arquivo.php
                xhttp.send(); //Ele envia essa requisição.
            }
        </script>

    </body>
</html>

