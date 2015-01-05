<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$id= $_REQUEST['id'];

$image= mysql_query("SELECT * FROM `image` where id=$id");

$image = mysql_fetch_assoc($image);
$image= $image['myfile'];

header("content_type:myfile/jpeg");
echo $image;
?>