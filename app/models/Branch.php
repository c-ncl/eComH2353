<?php
namespace app\models;

class Branch extends \app\core\Model{
	public $branch_id;
	protected $name;
	public $street;
	public $city;
	protected $postal_code;
	public $province;

	public function insert(){
		$SQL = "INSERT INTO client (name, street, city, postal_code, province) value (:name, :street, :city, :postal_code, :province)";
		$STH = self::$connection->prepare($SQL);
		$data = ['name'=>$this->name,
				'street'=>$this->street,
				'city'=>$this->city,
				'postal_code'=>$this->postal_code,
				'province'=>$this->province];
		$STH->execute($data);
		$this->client_id = self::$connection->lastInsertId();
	}
	
	public function getAll(){
		$SQL = "SELECT * FROM branch";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Branch');
		return $STH->fetchAll();
	}
}