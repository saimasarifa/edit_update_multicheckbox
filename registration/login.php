<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

if (isset($_POST['login'])){
    $password =$_POST['password'];
    $username=$_POST['user_name'];

    $query = "select * from 'registration' where user_name='$username' AND  password='$password' ";
    $result = mysql_query( $query);

    if (mysql_num_rows($result)>0){
       header('location: dashboard.php');
    }else{
    echo  "email or user name incorrect";
    }
}
//echo $result;

//if(mysql_num_rows($result>0)){


}
/*$query = "INSERT INTO `students`.`registration` (`id`,
`full_name`,
`father's_name`,
`mother's_name`,
`religion`,
`gender`,`nationality`,`national_id`

)
VALUES ('".$_POST['ID']."','".$_POST['full_name']."','".$_POST["fathersname"]."','".$_POST['mothersname']."',
'".$_POST['religion']."','".$_POST['gender']."','".$_POST['nationality']."','".$_POST['nationalid']."'

)";

mysqli_query($link, $query);

header('location:list_personalinfo.php');*/