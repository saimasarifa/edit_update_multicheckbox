<?php
$id = $_GET['id'];
$name = $_FILES["myfile"]["name"];
//$temp = $_FILES["myfile"]["tmp_name"];
$image = addslashes(file_get_contents($_FILES['myfile']['tmp_name']));

//move_uploaded_file($temp,"uploaded/".$name);



$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`image`(
`id`,
`myfile`

)
VALUES ('".$id."',
'".$image."')";



mysqli_query($link, $query);

echo "file is in";

header('location:list_imageinfo.php');
