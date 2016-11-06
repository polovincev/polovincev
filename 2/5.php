<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 05/11/2016
 * Time: 19:28
 */

function func($str){
    $str = strtolower($str);
    $str = str_replace(' ', '',$str);
    $strFlip = strrev($str);
    if ($str == $strFlip) {
        return true;
    } else {
        return false;
    }
}

function Is_palindrome($str){
    if (func($str)){
        return "Строка является полнидромом";
    } else {
        return "Строка не является полнидромом";
    }
}


echo Is_palindrome("kak kak");