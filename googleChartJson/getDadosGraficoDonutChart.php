<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/piechart#donut
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Task'),
            array('type' => 'number', 'label' => 'Hours per Day'),            
            //array('type' => 'string',  'role' => 'style')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'My Daily Activities',
        'width' => 800,
        'height' => 500,
        'pieHole' => 0.4
        
        //'legend' => array('position' => 'none')
       
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
        array('v' => 'Work'),
        array('v' => 11)
        //array('v' => '#b87333')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Eat'),
        array('v' => 2)
        //array('v' => 'silver')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Commute'),
        array('v' => 2)
        //array('v' => 'gold')
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Watch TV'),
        array('v' => 2)
        //array('v' => 'color: #e5e4e2')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Sleep'),
        array('v' => 7)
        //array('v' => 'gold')
    ));
    
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

