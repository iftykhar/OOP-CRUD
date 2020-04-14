<?php

class user{
	//properties 
	private $conn;
	private $table= "users";
	
	public $id;
	public $name;
	public $email;
	public $password;
	public $passwordRepete;
	public $status;
	
	//methods
	public function __construct($conn){
		$this->conn= $conn;
	}
	
	public function singupCheck(){
		
			if(empty($this->name)||empty($this->email)||empty($this->password)||empty($this->passwordRepete))
			{
				header("Location:singup.php?error=emptyfields&name=".$this->name."&email=".$this->email."&password=".$this->password);
				//exit();
			}
			else if (!filter_var($this->email,FILTER_VALIDATE_EMAIL)|| !preg_match("/^[a-zA-Z0-9]*$/",$this->name))
			{
				 header("Location:singup.php?error=invalidmail");
			}
			else if (!filter_var($this->email,FILTER_VALIDATE_EMAIL))
			{
				header("Location:singup.php?error=name=".$this->name);
				
			}
			else if (!preg_match("/^[a-zA-Z0-9]*$/",$this->name))
			{
				header("Location:singup.php?error=invalidname=".$this->email);
			}
			else if ($this->password !== $this->passwordRepete)
			{
				header("Location:singup.php?error=passwordchek&name=".$this->name."&email=".$this->email);
			}
			
			
			
			
					$sql="SELECT name users  WHERE name=?;";
					$stmt=mysqli_stmt_init($this->conn);
					if(!mysqli_stmt_prepare($stmt,$sql))
					{
						header("Location:singup.php?error=sqlerror");
			        }
			
					else
					{
						mysqli_stmt_bind_param($stmt, "s", $this->name);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						$resultcheck=mysqli_stmt_num_rows($stmt);
						if($resultchek > 0)
						{
							header("Location:singup.php?error=usernametaken=".$this->email);
							//exit();
						}
						else
						{
								$sql="INSERT INTO users(name,email,password) VALUES($this->name,$this->email,$this->password);";
								$stmt=mysqli_stmt_init($this->conn);
								if(!mysqli_stmt_prepare($stmt,$sql))
								{
									header("Location:singup.php?success=success");
								}
								else
								{
									mysqli_stmt_bind_param($stmt, "sss", $this->name,$this->email,$this->password);
									mysqli_stmt_execute($stmt);
									mysqli_stmt_store_result($stmt);
								}
						}
					}
			
	}
	
	public function singupsimple()
	{
		$sql = "INSERT INTO users(name,email,password) VALUES('$this->name','$this->email','$this->password')";
		$result = $this->conn->query($sql);
		if($result)
		{
			
			return "successfully inserted";
			
		}
		else{
			return "error: ".$this->conn->error;
		}
	}
	public function loginsimple()
	{
		$sql = "SELECT * FROM users WHERE email='$this->email'";
		$result = $this->conn->query($sql);
		/* $numrow= $result->num_row  */
		if($result->num_rows < 1)
		{
			$return = 0;
			
		}else
		{
			$row = $result -> fetch_assoc();
			$db_pass= $row['password'];
			if($db_pass == $this->password)
			{
				$return = 1;
			}else{
				$return = 2;
			}
			
		}
		
		return $return;
	}
	
}

?>