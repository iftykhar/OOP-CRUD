<?php
include_once 'db_conn.php';
include_once 'product.php';

$obj = new DbConnection();
$conn = $obj->getConnection();


$dbobj = new product($conn);
	
if($_GET['id'])
{
	$dbobj->id= $_GET['id'];

	
    $affectedRow = $dbobj->delete_data($_GET['id']);
	
	if ($affectedRow === TRUE) {
		echo "New record deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $this->conn->error;
	}	
        
		
		#$id=$_GET['id'];     
        #$sql= "DELETE FROM products WHERE id=$id";
		#$query=$conn->query($sql);
		
		$conn->close();	
}
        ?> 
        
        <script>
			window.location="index.php";
		</script>	
	