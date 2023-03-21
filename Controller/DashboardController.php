<?php

    class DashboardController extends BaseController
    {
		public function Dashboard()
		{
			$this->addparam("challenges0",$this->DashboardManager->ChallengeStarted());
			$this->addparam("challenges1",$this->DashboardManager->ChallengeCompleted());
			$this->view("Dashboard","Dashboard");	
		}
	}