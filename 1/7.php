<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 20:56
 */

for($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++){
       if(($i % 2) == 0 and ($j % 2 ) == 0){
           $res = $i*$j;
           echo " ($res) ";
       } elseif (($i % 2) == 1 and ($j % 2 ) == 1){
           $res = $i*$j;
           echo " [$res] ";
       } else {
           $res = $i*$j;
           echo " $res ";
       }
    }
    echo "<br>";
}