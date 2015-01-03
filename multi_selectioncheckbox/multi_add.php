<?php

    /*$hobby=$_POST['hobby'];
    $hobby1=join(",",$hobby);
    echo $hobby1;*/
/*$hobby='';
if(array_key_exists('hobby',$_POST)){
    //$hobby=join(",",$_POST['hobby']);
    $hobby=implode(',',$_POST['hobby']);
}
echo print_r($hobby);*/


    /*print_r($_POST['food']);
    print_r($_POST['cities']);*/
/*$food='';
if(array_key_exists('food_1',$_POST) && !empty($_POST['food_1'])){
    $food.=$_POST['food_1'].',';
}
if(array_key_exists('food_2',$_POST) && !empty($_POST['food_2'])){
    $food.=$_POST['food_2'].',';
}
if(array_key_exists('food_3',$_POST) && !empty($_POST['food_3'])){
    $food.=$_POST['food_3'].',';
}
if(array_key_exists('food_4',$_POST) && !empty($_POST['food_4'])){
    $food.=$_POST['food_4'];
}
$a=trim($food,',');
print_r($food);


    exit();*/

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");

    //if(isset($_POST['hobby']) && !empty($_POST['hobby'])){
    if(isset($_POST['hobby'])){
        $hobby=join(",",$_POST['hobby']);
    }

    /*$food='';
    if(isset($_POST['food_1']) && !empty($_POST['food_1'])){
        $food.=$_POST['food_1'].',';
    }
    if(isset($_POST['food_2']) && !empty($_POST['food_2'])){
        $food.=$_POST['food_2'].',';
    }
    if(isset($_POST['food_3']) && !empty($_POST['food_3'])){
        $food.=$_POST['food_3'].',';
    }
    if(isset($_POST['food_4']) && !empty($_POST['food_4'])){
        $food.=$_POST['food_4'];
    }
    $a=trim($food,',');*/

    $food='';
    if(array_key_exists('food_1',$_POST) && !empty($_POST['food_1'])){
        $food.=$_POST['food_1'].',';
    }
    if(array_key_exists('food_2',$_POST) && !empty($_POST['food_2'])){
        $food.=$_POST['food_2'].',';
    }
    if(array_key_exists('food_3',$_POST) && !empty($_POST['food_3'])){
        $food.=$_POST['food_3'].',';
    }
    if(array_key_exists('food_4',$_POST) && !empty($_POST['food_4'])){
        $food.=$_POST['food_4'];
    }
    $a=trim($food,',');

    if(isset($_POST['cities'])){
        $cities=join(",",$_POST['cities']);
    }



    $query="INSERT INTO `ftflbook`.`dropmulti` (`id` ,`full_name` ,`hobby`,`food` ,`cities` ,`created`)
            VALUES ('', '$_POST[full_name]', '$hobby','$a' ,'$cities', NOW());";


    if(mysqli_query($link,$query))
        echo "Successfully added 1 data into database";
    else
        die("Error: ".mysqli_error($link));
?>
<br />
<a href="index.html"><b>Add New Record</b></a>

<?php mysqli_close($link);?>