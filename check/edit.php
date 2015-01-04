<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbook");

$id=$_GET['id'];
$query="SELECT * FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
$result=mysqli_query($link,$query);
$rows=mysqli_fetch_array($result);

$hob=explode(',',$rows['hobby']);
$food=explode(',',$rows['food']);
$cities=explode(',',$rows['cities']);
?>


    <form action="update.php" method="post">
        <input type="hidden" id="update_id" value="<?php echo $id ?>" />

        <label>Full Name: </label>
        <input type="text" name="full_name" value="<?php echo $rows['full_name']; ?>" />

    <br>

        <label>Hobby: </label>

            <input type="checkbox" name="hobby[]" <?php if(in_array("Reading Book",$hob)) echo 'checked="checked"';  ?> value="Reading Book">Reading Book<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Travelling",$hob)) echo 'checked="checked"';  ?> value="Travelling">Travelling<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Programming",$hob)) echo 'checked="checked"';  ?> value="Programming">Programming<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Games",$hob)) echo 'checked="checked"';  ?> value="Games">Games<br />



        <label>Favorite Food: </label>

            <input type="checkbox" name="food_1" <?php if(in_array("Food1",$food)) echo 'checked="checked"';  ?> value="Food1">Food1<br />
            <input type="checkbox" name="food_2" <?php if(in_array("Food2",$food)) echo 'checked="checked"';  ?> value="Food2">Food2<br />
            <input type="checkbox" name="food_3" <?php if(in_array("Food3",$food)) echo 'checked="checked"';  ?> value="Food3">Food3<br />
            <input type="checkbox" name="food_4" <?php if(in_array("Food4",$food)) echo 'checked="checked"';  ?> value="Food4">Food4<br />


        <label>Preferred Job Location: </label>

            <select name="cities[]" multiple="multiple">
                <option <?php if(in_array('Dhaka',$cities)) echo 'selected="selected"';?> value="Dhaka">Dhaka</option>
                <option <?php if(in_array('Chittagong',$cities)) echo 'selected="selected"';?> value="Chittagong">Chittagong</option>
                <option <?php if(in_array('Khulna',$cities)) echo 'selected="selected"';?> value="Khulna">Khulna</option>
                <option <?php if(in_array('Jshore',$cities)) echo 'selected="selected"';?> value="Jshore">Jshore</option>

            </select>

        <input type="hidden" name="created" />

        <input type="hidden" name="modified" />

        <br>

        <input type="submit" name="update" value="Update">


</form>
<br>
<a href="list.php"><b>Go To List</b></a>


