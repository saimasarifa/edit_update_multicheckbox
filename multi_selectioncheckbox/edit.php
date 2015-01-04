<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

    $id=$_GET['id'];
    $query="SELECT * FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    $hob=explode(',',$rows['hobby']);
    $food=explode(',',$rows['food']);
    $cities=explode(',',$rows['cities']);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="multi_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <div>
        <label>Full Name: </label>
        <input type="text" name="full_name" value="<?php echo $rows['full_name']; ?>" />
    </div>
    <br>
    <div>
        <label>Hobby: </label>
        <div>
            <input type="checkbox" name="hobby[]" <?php if(in_array("Reading Book",$hob)) echo 'checked="checked"';  ?> value="Reading Book">Reading Book<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Travelling",$hob)) echo 'checked="checked"';  ?> value="Travelling">Travelling<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Programming",$hob)) echo 'checked="checked"';  ?> value="Programming">Programming<br />
            <input type="checkbox" name="hobby[]" <?php if(in_array("Games",$hob)) echo 'checked="checked"';  ?> value="Games">Games<br />
        </div>
    </div>

    <br>
    <div>
        <label>Favorite Food: </label>
        <div>
            <input type="checkbox" name="food_1" <?php if(in_array("Food1",$food)) echo 'checked="checked"';  ?> value="Food1">Food1<br />
            <input type="checkbox" name="food_2" <?php if(in_array("Food2",$food)) echo 'checked="checked"';  ?> value="Food2">Food2<br />
            <input type="checkbox" name="food_3" <?php if(in_array("Food3",$food)) echo 'checked="checked"';  ?> value="Food3">Food3<br />
            <input type="checkbox" name="food_4" <?php if(in_array("Food4",$food)) echo 'checked="checked"';  ?> value="Food4">Food4<br />
        </div>
    </div>
    <br>
    <div>
        <label>Preferred Job Location: </label>
        <br>
        <div>
            <br>
            <select name="cities[]" multiple="multiple">
                <option <?php if(in_array('Dhaka',$cities)) echo 'selected="selected"';  ?> value="Dhaka">Dhaka</option>
                <option <?php if(in_array('Chittagong',$cities)) echo 'selected="selected"';  ?> value="Chittagong">Chittagong</option>
                <option <?php if(in_array('Khulna',$cities)) echo 'selected="selected"';  ?> value="Khulna">Khulna</option>
                <option <?php if(in_array('Jshore',$cities)) echo 'selected="selected"';  ?> value="Jshore">Jshore</option>

            </select>
        </div>
    </div>
    <div>
        <input type="hidden" name="created" />
    </div>
    <div>
        <input type="hidden" name="modified" />
    </div>
    <div>
        <br>
        <input type="submit" name="update" value="Update">
    </div>
</form>
<br>
<a href="multi_list.php"><b>Go To List</b></a>
</body>
</html>

