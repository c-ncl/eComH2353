<?php 
namespace app\validators;
use app\core\Validator;

#[\Attribute]
class NonNull implements Validator
{
	public function isValid($data) : bool
	{
		return !is_null($data);
	}
}