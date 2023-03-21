<?php
	class BaseManager
	{
		private $_table;
		private $_object;
		public $_bdd ;
		
		public function __construct($table, $obj, $datasource)
		{
			$this->_table = $table;
			$this->_object = $obj;
			$this->_bdd = BDD::getInstance($datasource);
		}

		public function getById($id)
        
		{
			$req = $this->_bdd->prepare("SELECT * FROM " . $this->_table . " WHERE id=?");
			$req->execute(array($id));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_object);
			return $req->fetch();
		}
		
		public function getAll()
		{
      		$req =$this->_bdd->prepare("SELECT * FROM " . $this->_table);
			$req->execute();
			return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE);
		}
		
		public function create($obj,$param)
		{
			$paramNumber=count($param);
			$ValueArray= array_fill(1,$paramNumber,"?");
			$valueString = implode($ValueArray,", ");
			$sql = "INSERT INTO " . $this->_table . "(" . implode($param,", ") . ") VALUES(" . $valueString . ")";
			$req = $this->_bdd->prepare($sql);
			$boundParam = array();
			foreach($param as $paramName)
			{
				$boundParam[$paramName] = $obj->$paramName;	
			}
			$req->execute($boundParam);
		}
		
		public function update($obj,$param)    
		{
			$sql=( "UPDATE". $this->table."SET");
			foreach($param as $ParamName)
			{
					$sql=$sql.$param;    
			}
			$sql = $sql . " WHERE id = ? ";
			$req = $this->_bdd->prepare($sql);
			$param[] = 'id';
			$boundParam = array();
			foreach($param as $paramName)
			{
				if(property_exists($obj,$paramName))
				{
					$boundParam[$paramName] = $obj->$paramName;	
				}
				else
				{
					throw new PropertyNotFoundException($this->_object,$paramName);	
				}
			}
			
			$req->execute($boudParam);

		}
		
		public function delete($obj)
		{
            if(property-exist($obj,"id")){
            $req = $this->_bdd->prepare("DELETE FROM " . $this->_table . "WHERE id=?");
			$req->execute(array($obj->id));
            }
            else
			{
				throw new PropertyNotFoundException($this->_object, "id");	
			}
		}
	}