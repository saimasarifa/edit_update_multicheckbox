<?php
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");

    $id=$_GET['id'];
    $query="SELECT * FROM `ftflbook`.`dropmulti` WHERE `dropmulti`.`id` = $id";
    $result=mysqli_query($link,$query);
    $rows=mysqli_fetch_array($result);

    /*$hob=$rows['hobby'];
    $fav=$rows['food'];
    $cities=$rows['cities'];*/

   /* $hob=substr_count($rows['hobby'],'Reading Book');
    echo $hob;*/
    //$hob=explode(',',$rows['hobby']);
    //print_r($hob);
    //exit();
    /*$fav=explode(',',$rows['food']);
    $cities=explode(',',$rows['cities']);*/

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
            <input type="checkbox" name="hobby[]" <?php if(substr_count($rows['hobby'],'Reading Book')==1) echo 'checked="checked"';  ?> value="Reading Book">Reading Book<br />
            <input type="checkbox" name="hobby[]" <?php if(substr_count($rows['hobby'],'Travelling')==1) echo 'checked="checked"';  ?> value="Travelling">Travelling<br />
            <input type="checkbox" name="hobby[]" <?php if(substr_count($rows['hobby'],'Programming')==1) echo 'checked="checked"';  ?> value="Programming">Programming<br />
            <input type="checkbox" name="hobby[]" <?php if(substr_count($rows['hobby'],'Games')==1) echo 'checked="checked"';  ?> value="Games">Games<br />
        </div>
    </div>

    <br>
    <div>
        <label>Favorite Food: </label>
        <div>
            <input type="checkbox" name="food_1" <?php if(substr_count($rows['food'],'Food1')==1) echo 'checked="checked"';  ?> value="Food1">Food1<br />
            <input type="checkbox" name="food_2" <?php if(substr_count($rows['food'],'Food2')==1) echo 'checked="checked"';  ?> value="Food2">Food2<br />
            <input type="checkbox" name="food_3" <?php if(substr_count($rows['food'],'Food3')==1) echo 'checked="checked"';  ?> value="Food3">Food3<br />
            <input type="checkbox" name="food_4" <?php if(substr_count($rows['food'],'Food4')==1) echo 'checked="checked"';  ?> value="Food4">Food4<br />
        </div>
    </div>
    <br>
    <div>
        <label>Preferred Job Location: </label>
        <br>
        <div>
            <br>
            <select name="cities[]" multiple="multiple">
                <option <?php if(substr_count($rows['cities'],'Dhaka')==1) echo 'selected="selected"';  ?> value="Dhaka">Dhaka</option>
                <option <?php if(substr_count($rows['cities'],'Chittagong')==1) echo 'selected="selected"';  ?> value="Chittagong">Chittagong</option>
                <option <?php if(substr_count($rows['cities'],'Khulna')==1) echo 'selected="selected"';  ?> value="Khulna">Khulna</option>
                <option <?php if(substr_count($rows['cities'],'Jshore')==1) echo 'selected="selected"';  ?> value="Jshore">Jshore</option>
                <option <?php if(substr_count($rows['cities'],'Rajshahi')==1) echo 'selected="selected"';  ?> value="Rajshahi">Rajshahi</option>
                <option <?php if(substr_count($rows['cities'],'Borishal')==1) echo 'selected="selected"';  ?> value="Borishal">Borishal</option>
                <option <?php if(substr_count($rows['cities'],'Comilla')==1) echo 'selected="selected"';  ?> value="Comilla">Comilla</option>
                <option <?php if(substr_count($rows['cities'],'Dinajpur')==1) echo 'selected="selected"';  ?> value="Dinajpur">Dinajpur</option>
                <option <?php if(substr_count($rows['cities'],'Faridpur')==1) echo 'selected="selected"';  ?> value="Faridpur">Faridpur</option>
                <option <?php if(substr_count($rows['cities'],'Narayangonj')==1) echo 'selected="selected"';  ?> value="Narayangonj">Narayangonj</option>
                <option <?php if(substr_count($rows['cities'],'Rangamati')==1) echo 'selected="selected"';  ?> value="Rangamati">Rangamati</option>
                <option <?php if(substr_count($rows['cities'],'Kagrachori')==1) echo 'selected="selected"';  ?> value="Kagrachori">Kagrachori</option>
                <option <?php if(substr_count($rows['cities'],'Jorachori')==1) echo 'selected="selected"';  ?> value="Jorachori">Jorachori</option>
                <option <?php if(substr_count($rows['cities'],'Noakhali')==1) echo 'selected="selected"';  ?> value="Noakhali">Noakhali</option>
                <option <?php if(substr_count($rows['cities'],'Bbaria')==1) echo 'selected="selected"';  ?> value="Bbaria">Bbaria</option>
                <!--<option <?php /*if($cities[0]=='Dhaka') echo 'selected="selected"';  */?> value="city16">city16</option>
                <option value="City17">City17</option>
                <option value="city18">city18</option>
                <option value="city19">city19</option>-->
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