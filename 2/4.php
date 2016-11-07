<?php

function func($row, $col){
    if(is_int($row) and $row > 0 and is_int($col) and $col > 0){
        $ret = '';
        $ret .= '<table border="1">';

        for($i = 1; $i <= $row; $i++){
            $ret .= '<tr>';
            for ($j = 1; $j <= $col; $j++){
                $ret .= '<td>'.$i * $j.'</td>';
            }
            $ret .= '</br>';
        }
        $ret .= '</tabe>';
        return $ret;
    } else {
        return "Не верные параметры";
    }
}

echo func(10, 10);