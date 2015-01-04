<?php
/*$id = $_POST['id'];
$full_name = $_POST['full_name'];
$hob=$_POST['hobby'];
$food=$_POST['food'];
$cities= $_POST['cities'];*/


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");


if(isset($_POST['update']) && !empty($_POST['update'])){
    $update_id=$_GET['id'];

    if(isset($_POST['hobby']) && !empty($_POST['hobby'])){
                $hob=implode(',',$_POST['hobby']);
    }
    /* if(isset($_POST['food']) && !empty($_POST['food'])){
         $fav=join(',',$_POST['food']);
     }*/

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

    if(isset($_POST['cities']) && !empty($_POST['cities'])){
        $cities=join(',',$_POST['cities']);
    }

    if(isset($update_id)){
        $sql = "UPDATE dropmulti SET full_name='$_POST[full_name]',hobby='$hob',food='$a',cities='$cities',modified=NOW() WHERE id=$update_id";
        mysqli_query($link,$sql);
    }
}
/*
$query = "UPDATE `ftflbook`.`dropmulti` SET `full_name` = '".$full_name."' ,`hobby` = '".$hob."',
`food` = '".$food."',`cities` = '".$cities."',,modified=NOW()
 WHERE `ftflbook`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);*/

header('location:list.php');

?>