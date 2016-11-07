<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 06/11/2016
 * Time: 15:01
 */

function readF($fileName){
    $handler = fopen($fileName, 'r');
    return fread($handler, 500);

}

$str = 'test.txt';
echo readF($str);