<?php
//This is a crud application with list.php file

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "ftflbook");

    if(isset($_POST['update']) && !empty($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($_POST['hobby']) && !empty($_POST['hobby'])){
            //$hob=join(',',$_POST['hobby']);
            $hob=implode(',',$_POST['hobby']);
        }
       /* if(isset($_POST['food']) && !empty($_POST['food'])){
            $fav=join(',',$_POST['food']);
        }*/

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

        if(isset($_POST['cities']) && !empty($_POST['cities'])){
            $cities=join(',',$_POST['cities']);
        }

        if(isset($update_id)){
            $sql = "UPDATE dropmulti SET full_name='$_POST[full_name]',hobby='$hob',food='$a',cities='$cities',modified=NOW() WHERE id=$update_id";
            mysqli_query($link,$sql);
        }
    }

    $query="SELECT * FROM dropmulti";
    $result=mysqli_query($link,$query);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            thead {color:red;}
            tbody {color:blue;}
            tfoot {color:black;}
            table,th,td
            {border:1px solid black;}
        </style>
    </head>
    <body>
    <table border="1" align="center" width="100%">
        <thead>
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
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['full_name'] ?></td>
                <td><?php echo $row['hobby'] ?></td>
                <td><?php echo $row['food'] ?></td>
                <td><?php echo $row['cities'] ?></td>
                <td><?php echo $row['created'] ?></td>
                <td><?php echo $row['modified'] ?></td>
                <td><a href="multi_view.php?id=<?php echo $row['id']?>">View</a> | <a href="multi_update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="multi_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="11"><a href="index.html"><b>Go To Add New Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($link);?>