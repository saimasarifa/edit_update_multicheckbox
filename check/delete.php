<?php
////This is a crud application with delete.php file

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");

$id=$_GET['id'];
$query="DELETE FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
mysqli_query($link,$query);
header('location:list.php');

?>