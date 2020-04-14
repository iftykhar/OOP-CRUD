<?php
include_once 'db_conn.php';
include_once 'product.php';

$obj = new DbConnection();
$conn = $obj->getConnection();

//creating object for product class
$dbobj = new product($conn);


if($_POST)
{
	$dbobj->id= $_POST['id'];
	
	$dbobj->name = $_POST['name'];
	$dbobj->price = $_POST['price'];
	$dbobj->description = $_POST['description'];
	$dbobj->ategory = $_POST['category'];
	$dbobj->img = $_POST['img'];

	
	
	$affectedRow = $dbobj->inser_data();
	
	if ($affectedRow === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();/* insert into
	$sql="UPDATE Products SET name='$name',price='$price',description='$description',category='$category',img='$img' where id='$id'";
	$query = $conn->query($sql);
	
	if ($query === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
	//$conn->close();
}
?>

<script>
	window.location = "index.php";
</script>