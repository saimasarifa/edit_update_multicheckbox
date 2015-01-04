<?php


// include('connection.php');
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");



if(isset($_POST['hobby'])){
    $hobby=join(",",$_POST['hobby']);
}

$food='';
if(array_key_exists('food_1',$_POST) && !empty($_POST['food_1'])){
    $food.=$_POST['food_1'].',';
}
if(array_key_exists('food_2',$_POST) && !empty($_POST['food_2'])){
    $food.=$_POST['food_2'].',';
}
if(array_key_exists('food_3',$_POST) && !empty($_POST['food_3'])){
    $food.=$_POST['food_3'].',';
}
if(array_key_exists('food_4',$_POST) && !empty($_POST['food_4'])){
    $food.=$_POST['food_4'];
}
$a=trim($food,',');

if(isset($_POST['cities'])){
    $cities=join(",",$_POST['cities']);
}



$query="INSERT INTO `ftflbook`.`dropmulti` (`id` ,`full_name` ,`hobby`,`food` ,`cities` ,`created`)
            VALUES ('', '$_POST[full_name]', '$hobby','$a' ,'$cities', NOW());";


if(mysqli_query($link,$query))
    echo "Successfully added 1 data into database";

?>
<br />
<a href="create.html"><b>Add New Record</b></a><p>
<a href="list.php"><b>see the list</b></a>

