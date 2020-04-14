<?php
include_once 'db_conn.php';
include_once 'product.php';

$obj = new DbConnection();
$conn = $obj->getConnection();

$dbObj = new Product($conn);

if($_POST)
{
	$dbObj->name = $_POST['name'];
	$dbObj->price = $_POST['price'];
	$dbObj->description = $_POST['description'];
	$dbObj->category = $_POST['category'];
	$filename = $_FILES['img']['name'];
	$tmp = $_FILES['img']['tmp_name'];
	$size = $_FILES['img']['size'];
	$source = "assets/images/".$filename;
	move_uploaded_file($tmp,$source);
	$dbObj->image = $source;


	
	$affectedRow = $dbObj->store();
	
	if ($affectedRow === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	#var_dump($_POST);
	#var_dump($_FILES);
	
	$conn->close();
}
?>

<script>
	window.location = "index.php";
</script>