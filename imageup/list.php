<?php
// Connects to your Database
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

//Retrieves data from MySQL
$data = mysql_query("SELECT * FROM image") ;

//Puts it into an array
while($info = mysql_fetch_array( $data )) {
//Outputs the image and other data
Echo "<img src=localhost/edit_update_multicheckbox/imageup/images/".$info['myfile'] ."> <br>";
    Echo "<b>Name:</b> ".$info['name'] . "<br> ";

}?>