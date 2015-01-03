<?php

$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from personalinfo WHERE ID = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list_personalinfo.php">Go to Home</a>