<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`image` WHERE `image`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_imageinfo.php');
?>
