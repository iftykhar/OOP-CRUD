<?php
if(isset($_POST["submit"])){
	include 'db_conn.php';


	$email=$_POST['email'];
	$password=$_POST['password'];

	if (empty($email)||empty($password))
	{
		header("Location:../loging.php");
		exit();
	}
	else
	{
		
	}

}
else
{
	header("Location:../login.php");
	exit();
}




// check user name and password in db
// if valid user redirect to index page


/*where('email', $email)
where('password', $password)

check the result has value
count($row) > 0{
	redirect to index
}else{
	show message: u r not valide user
}



*/
?>
