<?php

//This is the directory where images will be saved
$target = "images/";
$target = $target . basename( $_FILES['myfile']['name']);

//This gets all the other information from the form
$name=$_POST['name'];
$pic=($_FILES['myfile']['name']);

// Connects to your Database
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

//Writes the information to the database
mysql_query("INSERT INTO `image` (`name`,`myfile`)VALUES ('$name', '$pic')") ;

//Writes the photo to the server
if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target))
{

    //Tells you if its all ok
    echo "The file ". basename( $_FILES['myfile']['name']). " has been uploaded, and your information has
    been added to the directory";
}
else {

    //Gives and error if its not
    //echo "Sorry, there was a problem uploading your file.";
    header('location:list.php');
}
?>