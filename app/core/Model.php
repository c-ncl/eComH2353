<?php
namespace app\core;
use PDO;

class Model{
	public static ?PDO $connection  = null;

	public function __construct()
	{
		if(self::$connection == null){
			//load the .env file from the given folder
			$env = \Dotenv\Dotenv::createImmutable(getcwd());
			$env->load();
			$env->required(['db_host', 'db_name', 'db_user', 'db_pass', 'db_charset'])->notEmpty();
			//all are needed and none should be empty

			//self::$connection = new \PDO("mysql:host=$_ENV[db_host];dbname=$_ENV[db_name]", $_ENV['db_user'], $_ENV['db_pass'], $_ENV['db_charset']);



			$host = $_ENV['db_host'];
			$dbname = $_ENV['db_name'];
			$user = $_ENV['db_user'];
			$pass = $_ENV['db_pass'];
			$charset = $_ENV['db_charset'];

			try {
				self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);
				self::$connection->query("SET NAMES $charset");
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
}