<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 04/11/2016
 * Time: 00:32
 */

function calcEverything(){
    $parameters  = func_get_args();
    if ($parameters[0] == "+" OR $parameters[0] == "-" OR $parameters[0] == "*" OR $parameters[0] == "/") {
        $temp = $parameters[1];
        $len = count($parameters);
        $str = "$parameters[1]";
        switch ($parameters[0]) {
            case "+": {
                for ($i = 2; $i < $len; $i++) {
                    $temp = $temp + $parameters[$i];
                    $str = $str . " + $parameters[$i]";
                }
                $str = $str . " = $temp";
                return $str;
            }
            case "-": {
                for ($i = 1; $i < $len; $i++) {
                    $temp = $temp - $parameters[$i];
                    $str = $str . " - $parameters[$i]";
                }
                $str = $str . " = $temp";
                return $str;
            }
            case "*": {
                for ($i = 1; $i < $len; $i++) {
                    $temp = $temp * $parameters[$i];
                    $str = $str . " * $parameters[$i]";
                }
                $str = $str . " = $temp";
                return $str;
            }
            case "/": {
                for ($i = 1; $i < $len; $i++) {
                $temp = $temp / $parameters[$i];
                $str = $str . " / $parameters[$i]";
            }
                $str = $str . " = $temp";
                return $str;
            }
         }
    } else {
        echo "Не вернвый порядок аргументов";
    }
}

echo calcEverything("*", 1, 2, 3, 10, 1, 4, 5.6);