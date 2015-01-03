<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from personalinfo;";

$result = mysqli_query($link, $query);


?>

<ul>

    <li><a href="create_personalinfo.html">Create New personal information</a> </li>
    <li><a href="create_contactinfo.html">Create New </a> </li>
</ul>

<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>father's Name</td>
        <td>mother's Name</td>
        <td>Religion</td>
        <td>Gender</td>
        <td>nationality</td>
        <td>national id</td>
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row["father's_name"]?></td>
            <td><?php echo $row["mother's_name"]?></td>
            <td><?php echo $row['religion']?></td>
             <td><?php echo $row["gender"]?></td>
            <td><?php echo $row["nationality"]?></td>
            <td><?php echo $row["national_id"]?></td>

            <td>
                <a href="view_personalinfo.php?ID=<?php echo $row['ID']?>">View/Show</a> |

                <a href="edit_personalinfo.php?ID=<?php echo $row['ID']?>">Edit</a> |

                <a href="delete_personalinfo.php?ID=<?php echo $row['ID']?>">Delete</a> |


            </td>
        </tr>

    <?php
    }
    ?>

</table>



