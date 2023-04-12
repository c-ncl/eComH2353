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

	public function edit($service_id) //modify client record
	{
		$service = new \app\models\Service();
		$service = $service->get($service_id);

		if(isset($_POST['action']))
		{
			$service->description = $_POST['description'];
			$service->datetime = T$_POST['datetime'];

			$client_id = $service->client_id;
			$success = $service->edit();
			if($success){
				header('location:/Service/index/'. $client_id .'?success=Service Updated.');
			} else {
				header('location:/Service/index'. $client_id .'?error=Error.');
			}
		} else {
			$this->view('Service/edit', $service);
		}
	}

	public function delete($service_id)
	{
		$service = new \app\models\Service();
		$service = $service->get($service_id);

		if(isset($_POST['action'])){
			$client_id = $service->client_id;
			$success = $service->delete();

			if($success){
				header('location:/Service/index/'. $client_id .'?success=Service Deleted.');
			} else {
				header('location:/Service/index'. $client_id .'?error=Error.');
			}
		} else {
			$this->view('Service/delete', $service);
		}
	}
}