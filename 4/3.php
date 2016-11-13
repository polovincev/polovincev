<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 13/11/2016
 * Time: 01:36
 */

function WorkCSV(){
    for ($i = 0; $i <= 50; $i++){
        $arr[] = rand(1, 100);
    }

    $fp = fopen('file.csv', 'w');
    fputcsv($fp, $arr);
    fclose($fp);

    $fp = fopen('file.csv', 'r');
    $data = fgetcsv($fp);
    fclose($fp);

    foreach ($data as $value){
        if ($value%2 == 0){
            $res += $value;
        }
    }
    return $res;
}

echo 'Сумма четных чисел равна: '.WorkCSV();