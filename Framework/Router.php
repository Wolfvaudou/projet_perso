<?php
	class Router
	{
		private $_listRoute;
		private $_httpRequest;
		
		public function __construct($httpRequest)
		{
			$this->_httpRequest=$httpRequest;
			$stringRoute = file_get_contents('Config/route.json');
			$this->_listRoute = json_decode($stringRoute);
		}
		
		public function findRoute($httpRequest, $basepath)
		{

			$url = str_replace($basepath,"",$httpRequest->getUrl());
			$separator=explode("?",$url);
			if(count($separator)>1){
			$httpRequest->addParam("id",$separator[1]);
			}
			$url=$separator[0];
			
			$method = $httpRequest->getMethod();
			$routeFound = array_filter($this->_listRoute,function($route) use ($url,$method){
				//return preg_match("#^" . $route->path . "$#", $url) && $route->method == $method;
				return  $route->path==$url && $route->method == $method;
			});
			$numberRoute = count($routeFound);
			if($numberRoute > 1)
			{
				throw new MultipleRouteFoundException();
			}
			else if($numberRoute == 0)
			{
				throw new NoRouteFoundException();
			}
			else
			{
				return new Route(array_shift($routeFound));	
			}
		}
	}