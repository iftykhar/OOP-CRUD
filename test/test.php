<?php



	if(empty($this->name)||empty($this->email)||empty($this->password)||empty($this->passwordRepete)){
			header("Location:singup.php?error=emptyfields&name=".$this->name."&email=".$this->email."&password=".$this->password);
			//exit();
			}
			else if (!filter_var($this->email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
				 header("Location:singup.php?error=invalidmailname");
			}
			else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
				header("Location:singup.php?error=invalidmail&name=".$this->name);
				
			}else if (!preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
				header("Location:singup.php?error=invalidname=".$this->email);
			}
			else if ($this->password !== $this->passwordRepete){
				header("Location:singup.php?error=passwordchek&name=".$this->name."&email=".$this->email);
			}
			else{
				$sql="SELECT name $this->table WHERE name=?";
				$stmt=mysqli_stmt_init($this->conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location:singup.php?error=sqlerror");
				}
			
				mysqli_stmt_bind_param($stmt, "s", $this->name);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultcheck=mysqli_stmt_num_rows($stmt);
				if($resultchek > 0){
					header("Location:singup.php?error=usernametaken=".$this->email);
					
					exit();
				}
			
				$sql="INSERT INTO users(name,email,password) VALUES(?,?,?)";
				$stmt=mysqli_stmt_init($this->conn);
				if(!mysqli_stmt_prepare($stmt,$sql))
				{
					header("Location:singup.php?success=success");
				}
				mysqli_stmt_bind_param($stmt, "sss", $this->name,$this->email,$this->password);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				
}
mysqli_close($conn);
?>