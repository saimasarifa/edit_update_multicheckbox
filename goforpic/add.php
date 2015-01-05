<?php
if (isset ($_POST['submit'])){
    mysql_connect("localhost","root","lict@2");
    mysql_select_db("students");
    $imageName= mysql_real_escape_string($_FILES['myfile']['name']);
    //print_r($_FILES['myfile']);
    $imageData=mysql_real_escape_string(file_get_contents($_FILES['myfile']['tmp_name']));
    // echo $imageData;// this will show all garbage data which is pic.
    $imagetype=mysql_real_escape_string($_FILES['myfile']['type']);
    if(substr($imagetype,0,5)=="image ")
    {
        mysql_query("INSERT INTO `image` VALUES ('','$imageName','$imageData')");
        echo"image uploaded";
    }else {
        echo"only image please";
    }
}
?>
<img src="list.php?id=48g">