<?php
namespace app\controllers;
use DateTime;
use IntlDateFormatter;
use \app\core\TimeHelper;

class Client extends \app\core\Controller{
	public function index(){
		$client = new \app\models\Client();
		$clients = $client->getAll();
		$this->view('Client/index', $clients);
	}

	public function create(){
		if(isset($_POST['action'])){
			//make a new client
			$client = new \app\models\Client();
			//populate the client
			$client->first_name = $_POST['first_name'];
			$client->last_name = $_POST['last_name'];
			$client->middle_name = $_POST['middle_name'];
			//invoke the insert method
			$client->insert();
			//back to the list of clients
			header('location:/Client/index');
		}else{
			$this->view('Client/create');
		}
	}

	public function edit($client_id) //modify client record
	{
		$client = new \app\models\Client();
		$client = $client->get($client_id);

		if(isset($_POST['action']))
		{
			$client->first_name = $_POST['first_name'];
			$client->middle_name = $_POST['middle_name'];
			$client->last_name = $_POST['last_name'];

			$success = $client->edit();
			if($success){
				header('location:/Client/index?success=Client Updated.');
			} else {
				header('location:/Client/index?error=Error.');
			}
		} else {
			$this->view('Client/edit', $client);
		}
	}

	public function delete($client_id){
		$client = new \app\models\Client();
		$client->delete($client_id);
		header('location:/Client/index');
	}

	public function date(){
		//TODO: get user's timezone choice (get this from browser)
		$date = new DateTime();
		global $lang; //checks the current language
		echo TimeHelper::DTOutput($date, $lang, 'America/Montreal');
	}

}