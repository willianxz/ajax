<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/areachart
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Year'),
            array('type' => 'number', 'label' => 'Sales'),
            array('type' => 'number', 'label' => 'Expenses')
            //array('type' => 'string',  'role' => 'style')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'Company Performance',
        'width' => 800,
        'height' => 500,
        'hAxis' => array('title' => 'Year', 'titleTextStyle' =>  array('color' => '#333')),
        'vAxis' => array('minValue' => 0)
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
        array('v' => '2013'),
        array('v' => 1000),
        array('v' => 400)
        //array('v' => '#b87333')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2014'),
        array('v' => 1170),
        array('v' => 460)
        //array('v' => 'silver')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2015'),
        array('v' => 660),
        array('v' => 1120)
        //array('v' => 'gold')
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2016'),
        array('v' => 1030),
        array('v' => 540)
        //array('v' => 'color: #e5e4e2')
    ));
    
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

