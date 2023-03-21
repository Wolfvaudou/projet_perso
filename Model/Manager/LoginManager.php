<?php
session_start();
	class LoginManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("Users","User",$datasource);	
		}
		public function Auth($username,$password)
        {
			$req = $this->_bdd->prepare("SELECT count(*) FROM Users where username=? and password=?") ;
			$req->execute(array($username,$password));
			$result=$req->fetchAll(PDO::FETCH_BOTH);

			if ($result[0][0]=='1'){
				$req = $this->_bdd->prepare("SELECT * FROM Users where username=? and password=?") ;
				$req->execute(array($username,$password));
				$result=$req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE);
				$_SESSION['login']=$result[0]->username;
				$_SESSION['name']=$result[0]->name;
				$_SESSION['nickname']=$result[0]->nickname;
				header('Location: /projet_perso/Dashboard');
				exit();
			}elseif($result[0][0]=='0'){

			header('Location: /projet_perso/Login');
			exit();
				
			}


        }


    }