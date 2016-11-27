<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 19/11/2016
 * Time: 01:21
 */

require_once 'connect.php';

session_start();

$name = htmlentities(strip_tags(trim($_POST['fname'])), ENT_QUOTES);
$password = htmlentities(strip_tags(trim($_POST['fpas'])), ENT_QUOTES);

$sql_catalog = "SELECT * FROM user WHERE name='$name' AND password='$password'";
$result = $mysql->query($sql_catalog);

$catalogs = $result->fetch_all(MYSQLI_ASSOC);

if($result->num_rows){
    $_SESSION['name'] = $name;
    header('HTTP/1.1 307 Temporary Redirect');
    header('Location: filelist.php');
} else {
    echo "Не верный логин или пароль";
}