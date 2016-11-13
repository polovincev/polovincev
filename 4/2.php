<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 12/11/2016
 * Time: 02:13
 */

$arr = array(
    'English' => array(
        'One',
        'January'
    ),
    'French' => array(
        'Une',
        'Janvier'
    )
);

$arr2 = array(
    'English' => array(
        'Book',
        'Cut'
    ),
    'French' => array(
        'Une',
        'Janvier'
    )
);


function WorkJson($arr, $arr2){
    $changearr = false;
    $json = json_encode($arr);
    file_put_contents('output.json', $json);
    $jsonfile = file_get_contents('output.json');

    if(rand(0, 1) == 0){
        $json2 = json_encode($arr2);
        file_put_contents('output2.json', $json2);
    } else {
        file_put_contents('output2.json', $jsonfile);
    }

    $jsonfile2 = file_get_contents('output2.json');

    $arrjson = json_decode($jsonfile, true);
    $arrjson2 = json_decode($jsonfile2, true);


    foreach ($arrjson as $key => $value) {
        foreach ($value as $k => $v) {
            if ($v != $arrjson2[$key][$k]){
                $changearr = true;
                echo 'Элементы '. $v . ' и ' . $arrjson2[$key][$k] . ' разные' . '<br>';
            }
        }
    }

    if (!$changearr){
        echo 'Данные в файлах одинаковые';
    }
}

WorkJson($arr, $arr2);