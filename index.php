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

    <title>::. Project .::</title>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Read Products</h1>
				</div>
				<hr />
			</div><!-- /.col -->
			<div class="col-md-12">
				<div class="pull-left">
					<form>
						<div class="form-row align-items-center">
							<div class="col-auto">
								<label class="sr-only">Username</label>
								<div class="input-group mb-2">
									<input type="text" class="form-control" placeholder="Type product name">
									<button class="btn btn-success"> <i class="fas fa-search"></i> </button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="pull-right" style="float:right">
					<a href="create_product.php" class="btn btn-primary">
						<i class="fas fa-plus"></i> Create Product
					</a>
				</div>
			</div><!-- /.col-md-12 -->
			
			<!-- $products = Select data from product table -->
			<?php
				include_once 'db_conn.php';
				include_once 'product.php';
				
				$obj = new DbConnection();
				$c1 = $obj->getConnection();
								
				$db = new Product($c1);
				$results = $db->getData();
			?>
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Description</th>
							<th>Category</th>
							<th>Actions</th>
						</tr>
						<?php while($row=$results->fetch_assoc()){?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['category']; ?></td>
						
						<td>
							<a href="read_once.php?id=<?php echo$row['id']; ?>" class="btn btn-primary"><i class="fas fa-list"></i> Read</a>
							<a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
							<a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
						</td>                
					</tr>
					<?php } ?>
					<?php $c1->close(); ?>
						<!-- }-->
					</table>
				</div><!-- /.table-responsive -->
			<div>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
		
  </body>
</html>