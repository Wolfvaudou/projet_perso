<?php
	class BaseController
	{
		private $_httpRequest;
		protected $_param;
		private $_config;
		private $_FileManager;
		protected  $challenge;
		
		public function __construct($httpRequest,$config)
		{
			$this->_httpRequest = $httpRequest;
			$this->_config = $config;
			$this->_param = array();
			$this->addParam("httprequest",$this->_httpRequest);
			$this->addParam("config",$this->_config);
			$this->bindManager();
			$this->_FileManager = new FileManager();
		}
		
		protected function view($filename,$title)	
		{
			if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/css/" . $filename . ".css"))
			{
				$this->addCss("View/" . $this->_httpRequest->getRoute()->getController() . "/css/" . $filename . ".css");
			}
			if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/js/" . $filename . ".js"))
			{
				$this->addJs("View/" . $this->_httpRequest->getRoute()->getController() . "/js/" . $filename . ".js");
			}
			if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php"))
			{
				$csscontent=$this->_FileManager->generateCss();
				ob_start();
				extract($this->_param);
				include("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php");
				$content = ob_get_clean();

				include("View/layout.php");
			}
			else
			{
				throw new ViewNotFoundException();	
			}
		}
		
		public function bindManager()
		{
			foreach($this->_httpRequest->getRoute()->getManager() as $manager)
			{
				$this->$manager = new $manager($this->_config->database);
			}
		}
		
		public function addParam($name,$value)
		{
			$this->_param[$name] = $value;
		}
		
		public function addCss($file)
		{
			$this->_FileManager->addCss($file);
		}
		
		public function addJs($file)
		{
			$this->_FileManager->addJs($file);
		}
	
	protected function viewChallenge($filename,$title)	
	{
		if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/css/" . $filename . ".css"))
		{
			$this->addCss("View/" . $this->_httpRequest->getRoute()->getController() . "/css/" . $filename . ".css");
		}
		if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/js/" . $filename . ".js"))
		{
			$this->addJs("View/" . $this->_httpRequest->getRoute()->getController() . "/js/" . $filename . ".js");
		}
		if(file_exists("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php"))
		{
			$csscontent=$this->_FileManager->generateCss();
			ob_start();
			extract($this->_param);
			include("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php");
			$content = ob_get_clean();

			include("View/layout.php");
		}
		else
		{
			throw new ViewNotFoundException();	
		}
	}
}