<?php
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");

$sql = "UPDATE dropmulti SET full_name='$_POST[full_name]',hobby='$hob',food='$a',cities='$cities',
        modified=NOW() WHERE id=$update_id";

mysqli_query($link,$sql);

$query="SELECT * FROM dropmulti";
$result=mysqli_query($link,$query);
header('location: multi_list.php');

?>