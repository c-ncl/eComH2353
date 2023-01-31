<?php
class Person{
	public $firstName;
	public $lastName;
	protected $age;
	protected $weight;
	private static $count;

	function __construct($firstName, $lastName, $age, $weight)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
		$this->weight = $weight;

		//this part is wrong
		//$this->count++;
		//right
		self::$count++;
	}

	function __toString()
	{
		return "$this->firstName $this->lastName is $this->age years old and weighs in at $this->weight pounds.";
	}

	//this is also wrong
	public static function count(){
		return self::$count;
	}
}

echo "<br>There are ", Person::count(), (Person::count()==1?" person":" people")," in the program. <br>";
$person = new Person('Poppy', 'Pops', 18, 145);
echo $person;
echo "<br>There are ", Person::count(), " in the program. <br>";
$person2 = new Person('Johnny', 'Boy', 19, 180);
echo $person2;
echo "<br>There are ", Person::count(), " in the program. <br>";

class Pugilist extends Person{
	public function fight($other)
	{
		return ($this->weight>$other->weight?$this:$other);
	}
}

$pugilist1 = new Pugilist('Andre', 'the Giant', 34, 234);
$pugilist2 = new Pugilist('Johnny', 'BigBoy', 25, 256);

$winner = $pugilist1->fight($pugilist2);

echo "The winner is ", $winner;