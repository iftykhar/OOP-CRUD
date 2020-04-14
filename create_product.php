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
					<h1>Create Products</h1>
				</div>
				<hr />
			</div><!-- /.col -->
			<div class="col-md-12">
				
				<div class="pull-right" style="float:right">
					<a href="index.php" class="btn btn-primary">
						<i class="fas fa-link"></i> Back
					</a>
				</div>
			</div><!-- /.col-md-12 -->
						
			<div class="col-md-12">
				<form action="store_product.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Product Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="price">Product Price</label>
						<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea col="5" name="description" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category" class="form-control">
							<option value="">Select Category</option>
							<option value="electronics">Electronics<option>
							<option value="fashion">Fashion<option>
							<option value="motors">Motors<option>
						</select>
					</div>
					<div class="form-group">
						<label for="img">Image</label>
						
						<input type="file" id="img"  name="img" class="form-contorl" />
						
					</div>
					
					<div style="text-align:center">
					<button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
					</div>
				</form>
			<div>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>