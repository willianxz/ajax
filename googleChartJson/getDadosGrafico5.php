<?php   //POR CIDADE

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
        'title' => 'Cidades',
        'width' => 800,
        'height' => 500,
        'legend shadow' =>'low',
        'x' => '-20',
        'y' => '0',
        $chart_pref = array(
           'rotation_x' => '30', 'rotation_y' => '30', 'min_x' => '0', 'max_x' => '70',  'min_y' => '30', 'max_y' => '80'
        ),        
        $chart_label = array(
           'shadow' => 'low', 'color' => '000000', 'alpha' => '75', 'size' => '10', 'position' => 'over', 'as_percentage' => 'true'
        ),
        $chart_type = array(
           'chart_type' => '3d column' 
        ),
        'margin' => '5',
        'fill_color' => '000066',
        'fill_alpha' => '0',
        'line_color' => '000000',
        'line_alpha' => '0',
        'line_thickness' => '1',
        'layout' => 'vertical',
        'size' => '7',
        'color' => '000000',
        'alpha' =>'85',
        'bullet' => 'circle',
        $filter = array(
            'shadow id' => 'low', 'distance' => '2', 'angle'=>'45', 'color'=>'0', 'alpha'=>'0', 'blurX'=>'4','blurY'=>'4' 
        )
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
        array('v' => 'Florianópolis'),
        array('v' => 5)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'São Miguel Do Oeste'),
        array('v' => 8)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Palhoça'),
        array('v' => 10)
    ));
    
     $grafico['dados']['rows'][] = array('c' => array(
        array('v' => 'Cirius'),
        array('v' => 15)
    ));
    
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

