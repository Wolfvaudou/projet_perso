<?php
	class IndexManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("Challenges","Challenge",$datasource);	
		}
    
		public function checkStarted($id,$users)
		{
			$req = $this->_bdd->prepare("SELECT count(*) FROM progress WHERE user=? and challenge=?") ;
			$req->execute(array($users,$id));
			$result=$req->fetchAll(PDO::FETCH_BOTH);
			var_dump($result,$users,$id);
			if (empty($result) ){
				var_dump($users);
				$reqs = $this->_bdd->prepare("INSERT INTO `progress` (`user`,`challenge`,`progress`) VALUES(?,?,FALSE)") ;
				$reqs->execute(array($users,$id));
			}

		}
	}