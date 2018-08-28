<?php

// Estrutura basica do grafico https://developers.google.com/chart/interactive/docs/gallery/linechart
$grafico = array(
    'dados' => array(
        'cols' => array(
            array('type' => 'string', 'label' => 'Ano'),
            array('type' => 'number', 'label' => 'Vendas'),
            array('type' => 'number', 'label' => 'Despesas')
        ),
        'rows' => array()
    ),
    'config' => array(
        'title' => 'TITULO DA EMPRESA',
        'width' => 900,
        'height' => 500,
        'curveType' => 'function', //Faz a linha ficar curvada.
        'legend' => array('position' => 'bottom' )
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
        array('v' => '2004'),
        array('v' => 1000),
        array('v' => 400)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2005'),
        array('v' => 1170),
        array('v' => 460)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2006'),
        array('v' => 660),
        array('v' => 1120)
    ));
    
    $grafico['dados']['rows'][] = array('c' => array(
        array('v' => '2007'),
        array('v' => 1030),
        array('v' => 540)
    ));
   



// Enviar dados na forma de JSON
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($grafico);
exit(0);

