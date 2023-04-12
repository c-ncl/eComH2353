<?php 
namespace app\validators;
use app\core\Validator;

#[\Attribute]
class NonEmpty implements Validator
{
	public function isValid($data) : bool
	{
		return !empty($data);
	}
}