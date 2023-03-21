<?php
	class ChallengeManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("Challenges","Challenge",$datasource);	
		}
		
		public function getByMail($mail)
		{
			$req = $this->_bdd->prepare("SELECT * FROM user WHERE mail=?");
			$req->execute(array($mail));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");

		}
    }
