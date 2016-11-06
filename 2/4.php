<?php

function func($row, $col){
    if(is_int($row) and $row > 0 and is_int($col) and $col > 0){
        for($i = 1; $i <= $row; $i++){
            for ($j = 1; $j <= $col; $j++){
                $res = $i * $j;
                echo " $res ";
            }
            echo "<br>";
        }
    } else {
        echo "Не верные параметры";
    }
}

func(10, 8);