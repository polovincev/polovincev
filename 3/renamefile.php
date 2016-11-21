<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 21/11/2016
 * Time: 23:29
 */

require_once 'connect.php';

$oldname = $_POST['oldname'];
$namenew = htmlentities(strip_tags(trim($_POST['name'])), ENT_QUOTES);

$nawpath = 'photos/'.$namenew;
$oldpath = 'photos/'.$oldname;

rename($oldpath, $nawpath);


$sql = "DELETE FROM file WHERE name = ?";

if($stmt = $mysql->prepare($sql)){
    $stmt->bind_param('s', $oldname);
    $stmt->execute();
}

$sql = "INSERT INTO file(name) VALUES (?)";
if ($stmt = $mysql->prepare($sql)) {
    $stmt->bind_param('s', $namenew);
    $stmt->execute();
}

header('HTTP/1.1 307 Temporary Redirect');
header('Location: filelist.php');