<?php
namespace app\core;

class App{

	function __construct(){
		//echo $_GET['url'] ?? 'No url provided';

		//this is where we want to route the requests to the appropriate classes/methods
		//we wish to route requests to /controller/method
		$request = $this->parseUrl($_GET['url'] ?? '');
		//var_dump($request);

		//default controller and method
		$controller = 'Main';
		$method = 'index';
		$params = [];

		//is the requested controller in our controllers folder?
		if(file_exists('app/controllers/' . $request[0] . '.php')) 
		{
			$controller = $request[0];
			//$controller = new Main();
			//TODO: remove the $request[0] element
			unset($request[0]);
		}
		$controller = 'app\\controllers\\' . $controller;
		$controller = new $controller;

		if(isset($request[1]) && method_exists($controller, $request[1]))
		{
			$method = $request[1];
			//TODO: remove the $request[1] element
			unset($request[1]);
		}

		$params = array_values($request);

		//Call the controller method with parameters
		call_user_func_array([$controller, $method], $params);
		//$controller->$method();
	}

	function parseUrl($url){
		return explode('/', trim($url, '/'));
	}

}