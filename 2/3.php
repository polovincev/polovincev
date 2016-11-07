<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 04/11/2016
 * Time: 00:32
 */

function calcEverything(){
    $parameters  = func_get_args();
    if (($parameters[0] == "+" OR $parameters[0] == "-" OR $parameters[0] == "*" OR $parameters[0] == "/") and Is_Numeric_Arr($parameters)) {
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
                for ($i = 2; $i < $len; $i++) {
                    $temp = $temp - $parameters[$i];
                    $str = $str . " - $parameters[$i]";
                }
                $str = $str . " = $temp";
                return $str;
            }
            case "*": {
                for ($i = 2; $i < $len; $i++) {
                    $temp = $temp * $parameters[$i];
                    $str = $str . " * $parameters[$i]";
                }
                $str = $str . " = $temp";
                return $str;
            }
            case "/": {
                for ($i = 2; $i < $len; $i++) {
                $temp = $temp / $parameters[$i];
                $str = $str . " / $parameters[$i]";
            }
                $str = $str . " = $temp";
                return $str;
            }
         }
    } else {
        return "Не верный порядок аргументов";
    }
}

function Is_Numeric_Arr($arr){
    if(count($arr) <= 1){
        return false;
    }
    for($i = 1; $i < count($arr); $i++){
        if(is_numeric($arr[$i])){
            return true;
        } else {
            return false;
        }
    }
}

echo calcEverything("*", 1, 2, 3);