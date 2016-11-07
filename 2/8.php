<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 06/11/2016
 * Time: 16:15
 */

function smaile($code){
    return chr(0xE0 | $code >> 12 & 0xF) . chr(0x80 | $code >> 6 & 0x3F) . chr(0x80 | $code & 0x3F);
}

function parserPakets($str){
    if(preg_match('|:\)|', $str)){
        return smaile(9785);
    } else {
        preg_match_all('|\d+|', $str, $out);
        if ((int)$out[0][0] > 1000){
            return "Сеть есть";
        } else {
            return "Сети нет";
        }
    }
}

$str_in = "RX packets:950000 errors:0 dropped:0 overruns:0 frame:0";
echo parserPakets($str_in);