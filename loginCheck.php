<?php
if(isset($_POST["submit"])){
	include 'db_conn.php';
	require "user.php";
	
	$obj = new DbConnection();
	$conn=$obj->getConnection();
	$userClassObj = new user($conn);

	$userClassObj->email 		=$_POST['email'];
	$userClassObj->password 	=$_POST['password'];

	if (empty($_POST['email'])||empty($_POST['password']))
	{
		header("Location: login.php?error=PassowrdEmptyOrEmail empty");
		exit();
	}
	else
	{
		$result = $userClassObj->loginsimple();
		if($result == 0)
		{
			header("Location: login.php?error=No Account found");
			exit();
		}else if($result ==2)
		{
			header("Location: login.php?error=password Incorrect");
			exit();
		}else if($result ==1)
		{
			session_start();
			$_SESSION['check']=1;
			header("Location: index.php");
			exit();
		}
	}
}
else
{
	header("Location: login.php");
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
