<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 06/11/2016
 * Time: 16:15
 */

function smaile(){
    return chr(1);
}

function parserPakets($str){
    if(preg_match('|:\)|', $str)){
        smaile();
    } else {
        preg_match_all('|\d+|', $str, $out);
        if ((int)$out[0] > 1000){
            return "Сеть есть";
        } else {
            return "Сети нет";
        }
    }
}

$str_in = "RX packets:95000 errors:0 dropped:0 overruns:0 frame:0";
echo parserPakets($str_in);