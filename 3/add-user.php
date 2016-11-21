<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 19/11/2016
 * Time: 01:21
 */

require_once 'connect.php';

$name = htmlentities(strip_tags(trim($_POST['name'])), ENT_QUOTES);
$age = htmlentities(strip_tags(trim($_POST['age'])), ENT_QUOTES);
$password = htmlentities(strip_tags(trim($_POST['password'])), ENT_QUOTES);
$description = htmlentities(strip_tags(trim($_POST['description'])), ENT_QUOTES);
$file = $_FILES['file'];


$types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');

if(!empty($file) and in_array($file['type'], $types)){
    $filename = date("H.i.s") . $file['name'];$types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');
    move_uploaded_file($file['tmp_name'], "photos/" . $filename);
    $sql = "INSERT INTO file(name) VALUES (?)";
    if ($stmt = $mysql->prepare($sql)) {
        $stmt->bind_param('s', $filename);
        $stmt->execute();
    }
}

$sql = "INSERT INTO user(name, password, age, description)
                    VALUES (?, ?, ?, ?)";

if($stmt = $mysql->prepare($sql)){
    $stmt->bind_param('ssis', $name, $password, $age, $description);
    $stmt->execute();

    header('HTTP/1.1 307 Temporary Redirect');
    header('Location: index.php');
    exit;

}