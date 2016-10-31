<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 01/11/2016
 * Time: 00:49
 */
function func($str, $mode = false){
    if(!$mode) {
        foreach ($str as $value) {
            echo "<p>$value";
        }
    } else {
        return join('', $str) ;
    }
}


$arr = ['book', 'they', 'hey', 'you'];

echo func($arr, true);