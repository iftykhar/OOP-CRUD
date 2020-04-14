
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
	<form action="singupCheck.php" method="POST" class="form-signin">
		<div class="shadow border p-4">
		<img class="mb-4" src="moon.png" alt="" width="72" height="72">		
			<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
			
			<label for="name" class="sr-only">Name </label>
			<input type="name" name="name" class="form-control" placeholder="Username" >
			
			<label for="email" class="sr-only">Email address</label>
			<input type="email" name="email" class="form-control" placeholder="Email address" >
			
			<label for="password" class="sr-only">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" >
			
			<label for="passwordRepete" class="sr-only">PasswordRepete</label>
			<input type="password" name="passwordRepete" class="form-control" placeholder="PasswordRepete" >
			
			<button  class="btn btn-lg btn-primary btn-block" name="singup-submit" type="submit">Sign up </button>
			<button class="btn btn-lg  btn-outline-secondary  btn-block" onclick="window.href='login.php'"><a href='login.php'>Login</a></button>
		</div>
	</form>
  </body>
</html>