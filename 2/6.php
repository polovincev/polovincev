<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 05/11/2016
 * Time: 19:57
 */
echo date("d.m.y H:i")."<br>";

$tm = mktime(0, 0, 0, 2, 24, 2016);

echo date('d.m.y H:i:s', $tm);