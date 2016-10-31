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

$arrtemp = [];
$i = count($arr)-1;

while ($i >= 0){
    $arrtemp[] = $arr[$i];
    $i--;
}
echo json_encode($arrtemp)."<br>";

$str = join("*", $arrtemp);
echo $str;
