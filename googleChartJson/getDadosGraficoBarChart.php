<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/barchart
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Element'),
            array('type' => 'number', 'label' => 'Density'),
            array('type' => 'string',  'role' => 'style')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'Density of Precious Metals, in g/cm^3',
        'width' => 800,
        'height' => 500,
        'bar' => array('groupWidth' =>  '95%'),
        'legend' => array('position' => 'none')
       
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
        array('v' => 'Copper'),
        array('v' => 8.94),
        array('v' => '#b87333')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Silver'),
        array('v' => 10.49),
        array('v' => 'silver')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Gold'),
        array('v' => 19.30),
        array('v' => 'gold')
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Platinum'),
        array('v' => 21.45),
        array('v' => 'color: #e5e4e2')
    ));
    
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

