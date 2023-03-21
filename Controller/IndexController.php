<?php

    class IndexController extends BaseController
		{
			public function Index()
			{
			$req=$this->IndexManager->getAll();
			$this->addParam("challenges",$req);
			$this->addParam("id",1);
			$this->view("Index","Index");
		}
#		public function ViewChallenge()
#		{
#			session_start();
#			$this->addParam("id",$_GET["id"]);

#			$this->view("ViewChallenge","Challenge");

	
#		}	
		}