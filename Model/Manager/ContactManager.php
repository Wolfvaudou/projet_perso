<?php
	class ContactManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("Contact","Contact",$datasource);	
		}
		public function insert($param)
		{
			$paramNumber=count($param);
			$ValueArray= array_fill(1,$paramNumber,"?");
			$valueString = implode($ValueArray,", ");
			$sql = "INSERT INTO `contact` (`email`,`message` ) VALUES(" . $valueString . ")";
			$req = $this->_bdd->prepare($sql);
			$req->execute($param);
		}
    }