<?php
	class Database
	{
		private $host="localhost";
		private $db_name="jobpool";
		private $username="root";
		private $password="";
		public $conn;
		public function dbconnection()
		{
			$this->conn=null;
			try
			{
				$this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
				$this->conn->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $exception)
			{
				echo "error:".$exception->getMessage();
			}
			return $this->conn;
		}
	}
?>