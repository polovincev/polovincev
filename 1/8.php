<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 01:28
 */

$str = "book door windows";
$arr = explode(" ", $str);

echo json_encode($arr)."<br>";

$arrtemp = $arr;
$i = 0;
$len = count($arr);

while ($i < $len){
    $arr[$i] = $arrtemp[$len-1-$i];
    $i++;
}
echo json_encode($arr)."<br>";

$str = join("*", $arr);
echo $str;
