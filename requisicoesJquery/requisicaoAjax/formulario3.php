<!DOCTYPE html> <!-- https://www.formget.com/jquery-post-data/ Tá funcionando támbem.-->
    <head>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <!-- Include JS File Here -->
        <link href="style.css" rel="stylesheet"/>
        <!-- Include JS File Here -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#btn").click(function () {
                   
                    var vname = $("#name").val();
                    var vemail = $("#email").val();
                    if (vname == '' && vemail == '')
                    {
                        alert("Please fill out the form");
                    }
                    else if (vname == '' && vemail !== '') {
                        alert('Name field is required')
                    }
                    else if (vemail == '' && vname !== '') {
                        alert('Email field is required')
                    }
                    else {
                        $.post("jquery_post3.php", //Required URL of the page on server //Pode troca aqui pelo cadastrar para ver támbem.
                                {// Data Sending With Request To Server
                                    name: vname,
                                    email: vemail
                                },
                        function (response, status) { // Required Callback Function
                            alert("*----Received Data----*\n\nResponse : " + response + "\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
                            $("#form")[0].reset();
                        });
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="main">
            <h2>jQuery Ajax $.post() Method</h2>
            <hr>
            <form id="form" method="post">
                <div id="namediv"><label>Name</label>
                    <input type="text" name="name" id="name" placeholder="Name"/><br></div>
                <div id="emaildiv"><label>Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"/></div>
            </form>
            <button id="btn">Send Data</button>
        </div>
    </body>
</html>