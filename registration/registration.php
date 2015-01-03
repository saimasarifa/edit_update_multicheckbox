<?php
if (isset($_POST['submit'])){
    $username=$_POST['user_name'];
     $email=$_POST['email'];
     $password=$_POST['password'];


    if ($username==''){
        echo "enter your name";
        exit();
    }
if($email==''){
    echo "enter email";
    exit();
}
if($password==''){
    echo"enter password";
    exit();
  }
}
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/
var_dump($_post);


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");
$query = "INSERT INTO `students`.`registration`(
`user_name`,
`email`,
`password`

)
VALUES ('$username', '$email', '$password');";
mysqli_query($link, $query);
if (mysql_query($query)){
  //  echo "welcome.php";
}
//var_dump($query);
header('location:dashboard.php');
