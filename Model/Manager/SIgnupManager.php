<?php
	class SignupManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("Users","User",$datasource);	
		}
		public function insert($param)
		{
			$paramNumber=count($param);
			$ValueArray= array_fill(1,$paramNumber,"?");
			$valueString = implode($ValueArray,", ");
			$sql = "INSERT INTO `users` (`username`,`password`,`email`,`nickname`,`name` ) VALUES(" . $valueString . ")";
			$req = $this->_bdd->prepare($sql);
			$req->execute($param);
		}
    }