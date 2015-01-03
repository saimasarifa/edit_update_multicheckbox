<?php

$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from personalinfo WHERE ID = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);



?>

<form action="update_personalinfo.php" method="post">
    <h1> personal info edit form</h1>

    <label>ID:</label>
    <input type="text" name="ID" value="<?php echo $row['ID'];?>" /><p>

    <label>full Name:</label>
    <input type="text" name="full_name" value="<?php echo $row['full_name'];?>" /><p>
    <label>father's Name:</label>
    <input type="text" name="fathersname" value="<?php echo $row["father's_name"];?>" /><p>
    <label>mother's Name:</label>
    <input type="text" name="mothersname" value="<?php echo $row["mother's_name"];?>" /><p>
        <label>Religion:</label>
        <input type="text" name="religion" value="<?php echo $row["religion"];?>" /><p>
        <label>Gender:</label>
        <input type="radio" name="gender" <?php if($row['gender'] =="male") echo 'checked';?> value="male"/>male
        <input type="radio" name="gender" <?php if($row['gender'] =="female") echo 'checked';?> value="female"/>female
    <p>


        <label>nationality:</label>
        <input type="text" name="nationality" value="<?php echo $row["nationality"];?>" /><p>
        <label>national id:</label>
        <input type="text" name="national_id" value="<?php echo $row["national_id"];?>" /><p>



    <button type="submit">Submit</button>

</form>

<a href="list_personalinfo.php">Back to Home</a>

