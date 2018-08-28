<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/table
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Name'),
            array('type' => 'number', 'label' => 'Salary'),
            array('type' => 'boolean', 'label' => 'Full Time Employee')
        ),
        'rows' => array()
    ),
    'config' => array(
        //'title' => 'TITULO DA EMPRESA',
        'width' => 900,
        'height' => 500
        //'curveType' => 'function', //Faz a linha ficar curvada.
        //'legend' => array('position' => 'bottom' )
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
        array('v' => 'Mike'),
        array('v' => array('v' => 10000, 'f' => 'R$10,000')),
        array('v' => true)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Jim'),
        array('v' => array('v' => 8000, 'f' => 'R$10,000')),
        array('v' => false)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Alice'),
        array('v' => array('v' => 12500, 'f' => 'R$10,000')),
        array('v' => true)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
       array('v' => 'Bob'),
        array('v' => array('v' => 7000, 'f' => 'R$10,000')),
        array('v' => true)
    ));
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

