<?php
session_start();
	class AdminManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct('Users',"object",$datasource);	
		}
		public function GetTable(){
			$req =$this->_bdd->prepare("SHOW TABLES");
			$req->execute();
			return $req->fetchAll(PDO::FETCH_OBJ);
		}
		public function GetColumns($table){
			$req =$this->_bdd->prepare("SHOW COLUMNS FROM $table");
			$req->execute();
			return $req->fetchAll(PDO::FETCH_OBJ);
		}
		public function getAllAssoc()
		{
      		$req =$this->_bdd->prepare("SELECT * FROM " . $this->_table);
			$req->execute();
			return $req->fetchAll(PDO::FETCH_ASSOC);
		}


		
		public function Select($array)
		{
			$sql=( "SELECT * FROM ". $_SESSION['table']." WHERE 1");
			foreach($array as $key => $value)
			{
				if ($value!=="")
				{
				$sql=$sql." AND "."`$key` = $value";
				}
			}
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			return $req->fetchall(PDO::FETCH_OBJ);

			
    }
	public function Update($array)
		{
			$sql=( "Update ". $_SESSION['table']." SET");
			foreach($array as $key => $value)
			{
				if ($value!=="")
				{
				$sql=$sql." AND "."`$key` = $value";
				}
			}
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			return $req->fetchall(PDO::FETCH_OBJ);

			
    }
	public function Insert($array)
		{
			$sql=( "INSERT INTO". $_SESSION['table']."(");
			foreach($array as $key => $value)
			{
			 $sql=$sql.",".$key
			}
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			return $req->fetchall(PDO::FETCH_OBJ);

			
    }
	public function Delete($array)
		{
			$sql=( "DELETE FROM ". $_SESSION['table']." WHERE 1");
			foreach($array as $key => $value)
			{
				if ($value!=="")
				{
				$sql=$sql." AND "."`$key` = $value";
				}
			}
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			return $req->fetchall(PDO::FETCH_OBJ);

			
    }
	}