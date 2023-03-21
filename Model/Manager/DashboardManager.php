<?php
	class DashboardManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("progress","progress",$datasource);	
		}
	
		public function ChallengeStarted()
		{
			$sql="SELECT DISTINCT count(*) FROM `progress` WHERE `progress`=0";
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			var_dump($req->fetchAll(PDO::FETCH_BOTH));
			return $req->fetchAll(PDO::FETCH_BOTH);

		}
		public function ChallengeCompleted()
		{
			$sql="SELECT DISTINCT count(*) FROM `progress` WHERE `progress`=1";
			$req = $this->_bdd->prepare($sql);
			$req->execute();
			var_dump($req->fetchAll(PDO::FETCH_BOTH));
			return $req->fetchAll(PDO::FETCH_BOTH);

		}
		}
    