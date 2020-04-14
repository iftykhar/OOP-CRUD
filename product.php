<?php

class Product{
	
	private $conn;
    private $table = "products";
	
	// object properties
	public $id;
    public $name;
    public $price;
	public $description;
	public $category;
	public $image;
	
	
	public function __construct($conn){
        $this->conn = $conn;
    }

	public function store()
	{
		$sql = "INSERT into $this->table (name, price, description, category, img) VALUES ('" . $this->name . "', '" . $this->price . "', '" . $this->description . "', '" . $this->category . "','" . $this->image . "')";
			
		$result = $this->conn->query($sql);
		
		if($result)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function getData()
	{
		$sql = "SELECT * FROM $this->table";
		$results = $this->conn->query($sql);
		return $results;
	}
	
	public function get_editdata($id)
	{
		
		
		$sql= "SELECT * FROM $this->table WHERE id= $id";
		$query=$this->conn->query($sql);
		return $query;
	}
	
	public function inser_data()
	{
			//update data 
		$sql="UPDATE $this->table  SET name='$this->name',price='$this->price',description='$this->description',category='$this->category',img='$this->img' WHERE id='$this->id'";
		
		$result = $this->conn->query($sql);
		
		if($result)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function delete_data($id)
	{
		//delete data query 
		$sql="DELETE FROM products WHERE id= $id";
		$query=$this->conn->query($sql);
		return $query;
		
	}
	
	public function read_data($id)
	{
		//read data of the database  of a selected row
		$sql="SELECT * FROM products WHERE id= $id";
		$query=$this->conn->query($sql);
		return $query;
	}
	
}