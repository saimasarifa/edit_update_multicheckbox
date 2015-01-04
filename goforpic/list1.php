<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

/*$query = "select * from personalinfo;";

$result = mysqli_query($link, $query);*/

$id=mysql_real_escape_string($_GET['id']);

$query=mysql_query("SELECT * FROM `image` where `id`='$id' ");


$result= mysqli_query($link, $query);
$row=mysql_fetch_assoc($result);

?>

<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>image</td>

        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php  header("content-type:myfile/jpeg");
                echo $row["myfile"]?></td>


            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View/Show</a> |

                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |


            </td>
        </tr>

    <?php
    }
    ?>

</table>



