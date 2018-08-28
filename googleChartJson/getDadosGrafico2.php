<?php

// Estrutura basica do grafico
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Gênero'),
            array('type' => 'number', 'label' => 'Quantidade')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'Quantidade de alunos por gênero',
        'width' => 800,
        'height' => 500
    )
);




 /*
    while ($obj = $stmt->fetchObject()) {
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => $obj->genero),
        array('v' => (int)$obj->quantidade)
    ));
}*/
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Genero A'),
        array('v' => 5)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Genero B'),
        array('v' => 8)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Genero C'),
        array('v' => 10)
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Genero D'),
        array('v' => 15)
    ));
    
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

