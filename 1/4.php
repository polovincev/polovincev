<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 00:57
 */
$age = 30;

if ($age >= 18 and $age <= 65){
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo  "Вам пора на пенсию";
} elseif ($age >= 1 and $age <= 17){
    echo  "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}