<?php
//This is a crud application with list.php file

//include('connection.php');

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");


$query="SELECT * FROM dropmulti";
$result=mysqli_query($link,$query);
?>


<table border="1" align="center" width="100%">

    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Hobby</th>
        <th>Favorite Food</th>
        <th>Cities</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Action</th>
    </tr>


    <?php foreach($result as $row){ ?>

        <tr align="center">
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['full_name'] ?></td>
            <td><?php echo $row['hobby'] ?></td>
            <td><?php echo $row['food'] ?></td>
            <td><?php echo $row['cities'] ?></td>
            <td><?php echo $row['created'] ?></td>
            <td><?php echo $row['modified'] ?></td>

            <td><a href="view.php?id=<?php echo $row['id']?>">View</a>
                | <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php } ?><p><p>
   <a href="create.html"><b>Add New Record</b></a>


