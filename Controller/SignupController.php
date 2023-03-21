<?php

    class SignupController extends BaseController
		{
			public function Signup()
			{
			$this->view("Signup","Sign Up");
		}
			public function CreateAccount()
			{
                $this->SignupManager->insert(array($_POST["username"],$_POST["password"],$_POST["mail"],$_POST["nickname"],$_POST["name"] ));  
			}	
		}