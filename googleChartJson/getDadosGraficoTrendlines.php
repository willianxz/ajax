<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/trendlines#fullhtml
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'number', 'label' => 'Age'),
            array('type' => 'number', 'label' => 'Weight')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'Age vs. Weight comparison',
        'width' => 900,
        'height' => 500,
        'legend' => 'none',
        'crosshair' => array('trigger' => 'both', 'orientation' => 'both'),
        'trendlines' => array(0 => array(            
             'type' => 'polynomial',
             'degree' => 3,
             'visibleInLegend' => true,
          ))
        
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
        array('v' => 8),
        array('v' => 12)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 4),
        array('v' => 5.5)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 11),
        array('v' => 14)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
       array('v' => 4),
       array('v' => 5)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
       array('v' => 3),
       array('v' => 3.5)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
       array('v' => 6.5),
       array('v' => 7)
    ));
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

