<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from ftflbook WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

list($year,$month,$day) = explode("-",$row['birth_day']);

var_dump($row['favourite_food']);


?>

<form action="update_ftflbookinfo.php" method="post">

    <h1> ftflbook info edit Form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" /><p>
        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" /><p>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row['email'];?>" /><p>
        <label>password:</label>
        <input type="password" name="password" value="<?php echo $row['password'];?>" /><p>
        <label>Date of Birth:</label>
        <select name=year value=''>select year
            <option value="1990"<?php if ($year=='1990') echo "selected"?>>1990</option>
            <option value="1991"<?php if ($year=='1991') echo "selected"?>>1991</option>
            <option value="1992"<?php if ($year=='1992') echo "selected"?>>1992</option>
        </select>

        <select name=month value=''>select month
            <option value="01"<?php if ($month=='01') echo "selected"?>>january</option>
            <option value="02"<?php if ($month=='02') echo "selected"?>>feb</option>
            <option value="03"<?php if ($month=='03') echo "selected"?>>march</option>
        </select>

        <select name=day value=''>select day
            <option value="01"<?php if ($month=='01') echo "selected"?>>01</option>
            <option value="02"<?php if ($month=='02') echo "selected"?>>02</option>
            <option value="03"<?php if ($month=='03') echo "selected"?>>03</option>
        </select>
    <p>


        <label>Gender:</label>
        <input type="radio" name="gender" <?php if($row['gender'] =="male") echo 'checked';?> value="male"/>male
        <input type="radio" name="gender" <?php if($row['gender'] =="female") echo 'checked';?> value="female"/>female
    <p>

        <label>Favourite Food:</label>

        <input type="checkbox" name="favourite_food" <?php if($row['favourite_food']=='fish_curry') echo 'checked';?> value="fish curry">Fish curry
        <input type="checkbox" name="favourite_food" <?php if($row['favourite_food']=='barger') echo 'checked';?> value="barger">Cheas Barger
        <input type="checkbox" name="favourite_food" <?php if($row['favourite_food']=='nun') echo 'checked';?> value="nun">nun


    <p>
        Comment:
        <textarea   cols="50" rows="4"  name="comment">
       <?php echo $row['comment'];?>
            </textarea>

        <label>Created:</label>
        <input type="text" name="created" value =" <?php echo $row["created"];?>" /><p>

        <label>modified :</label>
        <input type="text" name="modified" value=" <?php echo $row["modified"];?>" /><p>




        <button type="submit">Update</button>

</form>

<a href="list_ftflbookinfo.php">Back to Home</a>
