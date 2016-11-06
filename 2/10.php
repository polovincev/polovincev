<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 06/11/2016
 * Time: 15:39
 */

$file = "anothertest.txt";
$text = "Hello again!";

file_put_contents($file, $text);
echo file_get_contents($file);