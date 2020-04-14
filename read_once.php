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
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Read Products</h1>
				</div>
				<hr />
				<?php
				include_once 'db_conn.php';
				include_once 'product.php';
				
				$obj = new DbConnection();
				$conn = $obj->getConnection();
				
				$db = new Product($conn);
				$results = $db->read_data($_GET['id']);
				
				?>
			</div><!-- /.col -->
			<div class="col-md-12">
				
				<div class="pull-right" style="float:right">
					<a href="index.php" class="btn btn-primary">
						<i class="fas fa-list"></i> Read Product
					</a>
				</div>
			</div><!-- /.col-md-12 -->
				<div class="table-responsive">
					<table class="table table-bordered table-responsive table-striped table-hover " >
						<tr>
							
							<th>product</th>
							<th>Price</th>
							<th>Description</th>
							<th>Category</th>
							<th>image</th>
							<!--th>Actions</th-->
						</tr>
						<?php while($row=$results->fetch_assoc()){?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['category']; ?></td>
							<td> <img src="<?php echo $row['img'];  ?>" width="100%" height="100%"> </td>
						</tr>
						<?php } ?>
						<?php $conn->close(); ?>
						
					</table>
				</div><!-- /.table-responsive -->
			<div>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>