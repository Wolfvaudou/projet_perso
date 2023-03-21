<?php
	class MemberManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("projects","id",$datasource);	
		}
		
		public function getByMail($mail)
		{
			$req = $this->_bdd->prepare("SELECT * FROM projects WHERE mail=?");
			$req->execute(array($mail));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"id");
			return $req->fetch();
		}
	}