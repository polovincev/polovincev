<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 06/11/2016
 * Time: 14:25
 */
$str = "Карл у Клары украл Кораллы";
$pattern = "|К|i";
echo preg_replace($pattern, "", $str)."</br>";

$str1 = "Две бутылки лимонада";
$pattern1 = "|Две|";
echo preg_replace($pattern1, "Три", $str1);