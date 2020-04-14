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
	<link href="assets/css/signin.css" rel="stylesheet">

    <title>::. Project1 .::</title>
  </head>
  <body class="text-center">
	<form action="loginCheck.php" method="POST" class="form-signin">
		<div class="shadow border p-4">
		<img class="mb-4" src="moon.png" alt="" width="72" height="72">		
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			
			<label for="email" class="sr-only">Email address</label>
			<input type="email" name="email" class="form-control" placeholder="Email address" >
			
			<label for="password" class="sr-only">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" >
			
			<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Log in</button>
			<button class="btn btn-lg  btn-outline-secondary  btn-block" name="singup-submit" type="singup-submit"><a href='singup.php'>Sign up</a></button>
		</div>
	</form>
  </body>
</html>