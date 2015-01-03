<?php
$id =$_REQUEST['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");


$query = "select * from image WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
header("content-type :myfile/jpeg");
?>
