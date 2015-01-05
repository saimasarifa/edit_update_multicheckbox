<?php
mysql_connect("localhost","root","lict@2");
mysql_select_db("students");


//$id =mysql_real_escape_string($_GET['id']);
if (isset($_GET['id'])){
    $id=mysql_real_escape_string($_GET['id']);
$query=mysql_query("SELECT * FROM `image` where `id`='$id' ");
    while($row=mysql_fetch_assoc($query)){
        $imageData=$row['myfile'];

    }
    header("content-type:image/jpeg");
    echo $imageData;
}else{
    echo "error";
}
?>