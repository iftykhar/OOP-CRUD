<?php
if(isset($_POST['singup-submit'])){
	
	//var_dump($_POST);
	include 'db_conn.php';
	include 'user.php';
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwordRepete=$_POST['passwordRepete'];
	
		//$email = mysqli_real_escape_string($con,$email); //sql injection prevention
		//$password = mysqli_real_escape_string($con,$password); //sql injection prevention
	$obj = new DbConnection();
	$conn=$obj->getConnection();
	
	$udb= new user($conn);
	
	//var_dump($udb);
	$udb->name = $_POST['name'];
	$udb->email = $_POST['email'];
	$udb->password = $_POST['password'];
	$udb->passwordRepete = $_POST['passwordRepete'];
	
	$var=$udb->singupCheck();
	var_dump($var);

}