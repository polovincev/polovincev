<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 21/11/2016
 * Time: 23:15
 */
require_once 'connect.php';

$filename = $_GET['name'];

$path = 'photos/'.$filename;

unlink($path);

$sql = "DELETE FROM file WHERE name = ?";

if($stmt = $mysql->prepare($sql)){
    $stmt->bind_param('s', $filename);
    $stmt->execute();
    }

header('HTTP/1.1 307 Temporary Redirect');
header('Location: filelist.php');

