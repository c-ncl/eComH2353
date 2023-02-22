<?php
namespace app\controllers;

class Profile extends \app\core\Controller
{
	public function index()
	{
		//view the profile
		$profile = new \app\models\ProfileInformation();
		$profile = $profile->getByUserId($_SESSION['user_id']);
		if($profile){
			$this->view('Profile/index', $profile);
		} else {
			header('location:/Profile/create');
		}
	}

	public function create()
	{
		if(isset($_POST['action']))
		{
			$profile = new \app\models\ProfileInformation();
			$profile->user_id = $_SESSION['user_id'];
			$profile->first_name = $_POST['first_name'];
			$profile->middle_name = $_POST['middle_name'];
			$profile->last_name = $_POST['last_name'];

			$success = $profile->insert();
			if($success){
				header('location:/Profile/index?success=Profile Created.');
			} else {
				header('location:/Profile/index?error=Only One Profile Possible.');
			}
			
		} else {
			$this->view('Profile/create');
		}
	}

	public function edit()
	{
		$profile = new \app\models\ProfileInformation();
		$profile = $profile->getByUserId($_SESSION['user_id']);

		if(isset($_POST['action']))
		{
			$profile->first_name = $_POST['first_name'];
			$profile->middle_name = $_POST['middle_name'];
			$profile->last_name = $_POST['last_name'];

			$success = $profile->update();
			if($success){
				header('location:/Profile/index?success=Profile Updated.');
			} else {
				header('location:/Profile/index?error=Error.');
			}
			
		} else {
			$this->view('Profile/edit', $profile);
		}
	}
}