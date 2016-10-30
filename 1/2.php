<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 00:35
 */
$paint = 80;
$pPencil = 23;
$pMarkers = 40;
$pPaint = $paint - $pPencil - $pMarkers;

echo 'На школьной выставке ' .$paint. ' рисунков ' .$pMarkers. ' из них выполнены фломастерами, ' .$pPencil. ' карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?','<br>';
echo  'Решение: '.$paint.' - '.$pPencil.' - '.$pMarkers.' = '.$pPaint;