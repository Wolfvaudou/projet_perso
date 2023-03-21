<?php

    class HomeController extends BaseController
    {
		public function Home()
		{
			$this->view("Home","Page d'accueil");	
		}
	}