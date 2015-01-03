

require_once("dbconnect.inc.php");  //for database connection
$db_name="thinstrokes";
$tbl_name="product";
$db_selected=mysql_select_db("$db_name")or die("cannot select DB");
// Connect to server and select databse.
// username and password sent from form
$myusername=$_POST['myusername'];
$myproduct=$_POST['product'];
$filename=$_POST['uploadimage'];

$imgData = file_get_contents($filename);
$size = getimagesize($filename);
$sql = "INSERT INTO product
(productname, image_id , image_type ,image, image_size, image_name,productdesc)
VALUES
('$myusername','11', '{$size['mime']}', '{$imgData}', '{$size[3]}',
'{$_FILES['userfile']['name']}','$productdesc')";
$result=mysql_query($sql) or die("error in uploading/*");