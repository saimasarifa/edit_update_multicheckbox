<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$id= $_REQUEST['id'];

$image= mysql_query("SELECT * FROM image where id=$id");

$image = mysql_fetch_assoc($query);
$image= $image['myfile'];

header("content_type:image/jpeg");
echo $image;
?>