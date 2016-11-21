<?php

$mysql = @new mysqli('localhost', 'root', 'root', 'DataBase1');

if(mysqli_connect_errno()){
    die(mysqli_connect_error());
}

$sql = "SET NAMES 'UTF-8'";
$mysql->query($sql);