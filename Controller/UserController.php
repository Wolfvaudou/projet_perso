<?php
	class UserController extends BaseController
	{
		public function Login()
		{
			$this->view("login","page d'authentification");
		}
		
		public function Authenticate($login,$password)
		{
			$user = $this->UserManager->getById(1);
			var_dump($user);
		}
    }