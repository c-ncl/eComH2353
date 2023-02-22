<?php
namespace app\models;

class User extends \app\core\Model 
{
	public $user_id;
	public $username;
	public $password_hash;

	public function getByUsername($username)
	{
		$SQL = 'SELECT * FROM User WHERE Username = :username';
		$STH = $this->connection->prepare($SQL);
		$STH->execute(['username'=>$username]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetch();
	}

	public function insert()
	{
		$SQL = 'INSERT INTO User(username, password_hash) VALUES (:username, :password_hash)';
		$STH = $this->connection->prepare($SQL);

		$STH->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash]);
		return $this->connection->lastInsertId(); //return the value of the new PK	
	}
}