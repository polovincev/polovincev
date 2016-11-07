<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 05/11/2016
 * Time: 19:28
 */

function func($str){
    $str = mb_strtolower($str);
    $str = str_replace(' ', '',$str);
    $strFlip = mb_strrev($str);
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

function mb_strrev($str){
    $strflip = "";
    for($i = mb_strlen($str); $i >=0; $i--){
        $strflip .= mb_substr($str, $i, 1);
    }
    return $strflip;
}

echo Is_palindrome("как как");