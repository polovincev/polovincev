<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 01:07
 */
$day = 4;
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo "Это рабочий день";
        break;
    case 6: echo "Это выходной день";
        break;
    case 7: echo "Это выходной день";
        break;
    default: echo "Неизвестный день";
}