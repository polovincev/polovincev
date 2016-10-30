<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 31/10/2016
 * Time: 00:51
 */
define("CONSTANTA", 10);

if (defined("CONSTANTA") == true) {
    echo "Констана объявлена!<br>";
    echo CONSTANTA,'<br>';
    define("CONSTANTA", 20);
    echo CONSTANTA;
}
