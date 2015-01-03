<form action="get.php" method="post" enctype="multipart/form-data">
    <h1> upload an image</h1>

    <input type="file" name="myfile"/><p>
    <input type="submit"name="submit" value="upload"/>
</form>
<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$file=$_FILES['myfile']['tmp_name'];
$image = (file_get_contents($_FILES['myfile']['tmp_name']));
$image_name = $_FILES['myfile']['name'];

if($insert = mysql_query("insert into image VALUES ('','$image_name','$image')"))
echo  "problem";
else
{
    $lastid =mysql_insert_id();
    echo "image Uplode.<p/>your image:<p/><img src= get.php?id = $lastid>";
}



    ?>