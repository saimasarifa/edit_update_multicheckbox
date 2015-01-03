<?php

$id = $_POST['ID'];
$fullname = $_POST['full_name'];
$fathersname =$_POST['fathersname'];
$mothersname =$_POST['mothersname'];
$religion =$_POST['religion'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$nationalid =$_POST['national_id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`personalinfo` SET `full_name` = '".$fullname."' ,`father's_name` = '".$fathersname."',
`mother's_name` = '".$mothersname."',`religion` = '".$religion."',`gender` = '".$gender."',`nationality` = '".$nationality."'
,`national_id` = '".$nationalid."'
 WHERE `personalinfo`.`ID` = $id;";

mysqli_query($link, $query);

header('location:list_personalinfo.php');