<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="assets/css/custom.css">

    <title>::. Project1 .::</title>
  </head>
  <body>
	<div class="container">
	
	<?php
		include_once 'db_conn.php';
		include_once 'product.php';
		
		$obj = new DbConnection();
		$conn = $obj->getConnection();
		
		$db = new product($conn);
		
		$results = $db->get_editdata($_GET['id']);
		
		#print_r($c1);
		
		/*$id=$_GET['id'];     
		$sql= "SELECT * FROM Products WHERE id= $id ";
		$query=$conn->query($sql);
		$row = $query->fetch_assoc();
		$conn->close();*/
	
	?>
			
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Edit Products</h1>
				</div>
				<hr />
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

			</div><!-- /.col -->
			<div class="col-md-12">
				
				<div class="pull-right" style="float:right">
					<a href="index.php" class="btn btn-primary">
						<i class="fas fa-link"></i> Back
					</a>
				</div>
			</div><!-- /.col-md-12 -->
		<?php while($row=$results->fetch_assoc()){?>
			<div class="col-md-12">
				<form action="update.php" method="post" enctype="multipart/form">
					<div class="form-group">
						
						<input type="hidden" value="<?php echo $row['id']; ?>" name="id" >
						<label for="name">Product Name</label>
						<input type="text" name="name" value="<?php echo $row['name']; ?>"   class="form-control">
					</div>
					<div class="form-group">
						<label for="price">Product Price</label>
						<input type="text" name="price" value="<?php echo $row['price']; ?>"   class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea col="5" name="description"  class="form-control"><?php echo $row['description']; ?></textarea>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category"   class="form-control">
							<option value="">Select Category</option>
							<option value="electronics" <?php if($row['category'] == 'electronics') {echo 'selected';} ?>>Electronics<option>
							<option value="fashion" <?php if($row['category'] == 'fashion') {echo 'selected';} ?>>Fashion<option>
							<option value="motors" <?php if($row['category'] == 'motors') {echo 'selected';} ?>>Motors<option>
						</select>
					</div>
					<?php } ?>
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file"  name="img"  value="" class="form-control">
					</div>
					
					<div style="text-align:center">
					<button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Submit</button>
					</div>
				</form>
			<div>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>