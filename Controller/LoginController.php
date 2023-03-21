<?php


    class LoginController extends BaseController
    {
		public function Login()
		{
			$this->view("Login","Page de connexion");	
		}
		public function Auth()
		{
			
			$username = htmlspecialchars($_POST['username']);
			$password = htmlspecialchars($_POST['password']);

			$this->LoginManager->Auth($username,$password);
			}
			public function Unco()
			{
				session_start();
				session_destroy();
				header('Location: /projet_perso/Home');
				exit();
			}
	}