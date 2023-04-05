<?php
namespace app\core;
use DateTime;
use IntlDateFormatter;

class TimeHelper
{
	public static function DTOutput($s_datetime)
	{
		$datetime = new DateTime($s_datetime);
		$timezone='UTC';
		global $lang;
		//	TODO: pick the timezone
		$fmt = new IntlDateFormatter(
			$lang, 
			IntlDateFormatter::MEDIUM, //date format
			IntlDateFormatter::MEDIUM, // time format
			$timezone
		);

		return $fmt->format($datetime);
	}
}