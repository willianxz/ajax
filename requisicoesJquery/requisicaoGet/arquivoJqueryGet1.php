
<?php


if(isset($_GET['nome'])&& isset($_GET['cidade'])){
    
    $nome = strip_tags($_GET['nome']);
    $cidade = strip_tags($_GET['cidade']);
    
    $html = "<h2> Este é o conteúdo requisitado para demonstrar a funçao get";
    $html .= "Os dados enviados foram: ";
    $html .= "nome: ".$nome;
    $html .= ", cidade: ".$cidade;
    
    echo $html;
    
    
    
}



// put your code here
?>