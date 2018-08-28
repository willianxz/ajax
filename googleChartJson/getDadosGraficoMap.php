<?php

// Estrutura basica do grafico
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Country'),
            array('type' => 'string', 'label' => 'Population')           
            //array('type' => 'string',  'role' => 'style')
        ),
        'rows' => array()
    ),
    'config' => array(
        //'title' => 'My Daily Activities',        
        'width' => 800,
        'height' => 500,
        'showTooltip' =>  true,
        'showInfoWindow' => true
        
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
        array('v' => 'China'),
        array('v' => 'China: 1,363,800,000')
        //array('v' => '#b87333')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'India'),
        array('v' => 'India: 1,242,620,000')
        //array('v' => 'silver')
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
         array('v' => 'US'),
        array('v' => 'US: 317,842,000')
        //array('v' => 'gold')
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
         array('v' => 'Indonesia'),
        array('v' => 'Indonesia: 247,424,598')
        //array('v' => 'color: #e5e4e2')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Brazil'),
        array('v' => 'Brazil: 201,032,714')
        //array('v' => 'gold')
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Pakistan'),
        array('v' => 'Pakistan: 186,134,000')
        //array('v' => 'gold')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Nigeria'),
        array('v' => 'Nigeria: 173,615,000')
        //array('v' => 'gold')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Bangladesh'),
        array('v' => 'Bangladesh: 152,518,015')
        //array('v' => 'gold')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Russia'),
        array('v' => 'Russia: 146,019,512')
        //array('v' => 'gold')
    ));
     
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Japan'),
        array('v' => 'Japan: 127,120,000')
        //array('v' => 'gold')
    ));
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

