<?php

class DbConnection
{
	//database 
	private $servername= 'localhost';
	private $username= 'root';
	private $password= '';
	private $dbname= 'oopproject';
	public $conn;

 // get the database connection
    public function getConnection()
	{
        // Create connection
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
  
        return $this->conn;
    }

}



/*$servername='localhost';
$username='root';
$password='';
$db_name='project1';


$conn= new mysqli($servername, $username, $password, $db_name);

//check connection
if($conn->connect_error)
{
	echo 'show error';
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/
?>