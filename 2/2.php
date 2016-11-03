<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 04/11/2016
 * Time: 00:07
 * @param $str
 * @param $arr
 */

function arithmetic($str, $arr){
    $temp = $arr[0];
    $len = count($arr);
    switch ($str) {
        case "+": {
            for($i = 1; $i < $len; $i++){
                echo $temp;
                $temp = $temp + $arr[$i];
            }
            return $temp;
        }
        case "-": {
            for($i = 1; $i < $len; $i++){
                $temp = $temp - $arr[$i];
            }
            return $temp;
        }
        case "*": {
            for($i = 1; $i < $len; $i++){
                $temp = $temp * $arr[$i];
            }
            return $temp;
        }
        case "/": {
            for($i = 1; $i < $len; $i++){
                $temp = $temp / $arr[$i];
            }
            return $temp;
        }
        default: echo "Не верное арифмитическое действие";
    }
}

$do = '*';
$DataArr = [10, 20, 3, 4];

echo arithmetic($do, $DataArr);