<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from registration;";

$result = mysqli_query($link, $query);


?>








    <tr>
        <td>hello<?php echo $result['id']?></td>
        <td><?php echo $result['user_name']?></td>
        <td><?php echo $result["email"]?></td>
</tr>