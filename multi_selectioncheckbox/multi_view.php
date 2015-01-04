<?php
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");
    $id = $_GET['id'];

    $query = "SELECT * FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',19).": "."<b>".$row['id']."</b>".$c;
    echo $c."Full Name".str_repeat('&nbsp;',6).": ".$row['full_name']."</b>".$c;
    echo $c."Hobby".str_repeat('&nbsp;',12).": "."<b>".$row['hobby']."</b>".$c;
    echo $c."Favorite Food: "."<b>".$row['food']."</b>".$c;
    echo $c."Cities".str_repeat('&nbsp;',13).": "."<b>".$row['cities']."</b>".$c;
    echo $c."Created".str_repeat('&nbsp;',9).": "."<b>".$row['created']."</b>".$c;
    echo $c."Modified".str_repeat('&nbsp;',8).": "."<b>".$row['modified']."</b>".$c;
?>
<br />
<a href="multi_list.php">Go To List</a>
