<?php
namespace app\controllers;
use DateTime;
use IntlDateFormatter;
use \app\core\TimeHelper;

class Service extends \app\core\Controller
{
	public function index($client_id)
	{
		$client = new \app\models\Client();
		$client = $client->get($client_id);
		$this->view('Service/index', $client);
	}

	public function create($client_id)
	{
		if(isset($_POST['action']))
		{
			$service = new \app\models\Service();
			$service->description = htmlentities($_POST['description']);
			$service->datetime = $_POST['datetime'];
			$service->client_id = $client_id;
			$service->insert();

			header('location:/Service/index/' . $client_id);
		}else{
			$client = new \app\models\Client();
			$client = $client->get($client_id);
			$this->view('Service/create', $client);
		}
	}

	public function edit($client_id) //modify client record
	{
		$service = new \app\models\Service();
		$service = $client->get($service_id);
		$client_id = $service->client_id;

		if(isset($_POST['action']))
		{
			$service->description = $_POST['description'];
			$service->datetime = $_POST['datetime'];

			$success = $client->edit();
			if($success){
				header('location:/Service/index/'. $client_id .'?success=Client Updated.');
			} else {
				header('location:/Client/index'. $client_id .'?error=Error.');
			}
		} else {
			$this->view('Service/edit', $service);
		}
	}

	public function delete($service_id)
	{
		$service = new \app\models\Service();
		$service->get($service_id);
		//$client = $service->getClient(); do this in the view

		if(isset($_POST[action])){
			$client_id = $service->client_id;
			$service->delete();
			header('location/Service/index/'. $client_id);
		} else {
			$this->view('Service/delete', $service);
		}
	}
}