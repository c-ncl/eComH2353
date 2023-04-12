<?php
namespace app\core;
use DateTime;
use IntlDateFormatter;
use DateTimeZone;

class TimeHelper
{
	public static function DTOutput($s_datetime)
	{
		//create a datetime object in the timezone of reference for DB data
		$datetime = new DateTime($s_datetime, new DateTimeZone('UTC'));
		global $tz;
		global $lang;
		$fmt = new IntlDateFormatter(
			$lang, 
			IntlDateFormatter::MEDIUM, //date format
			IntlDateFormatter::MEDIUM, // time format
			$tz
		);

		return $fmt->format($datetime);
	}

	public static function DTInput($s_datetime)
	{
		try 
		{
			//create a datetime object in the local timezone
			global $tz;
			$datetime = new DateTime($s_datetime, new DateTimeZone($tz));
	
			//change the timezone
			$datetime->setTimeZone(new DateTimeZone('UTC'));
	
			//output to a standard string format
			return $datetime->format('Y-m-d H:i:s');
		} catch(Exception $e) {
			return '';
		}
	}

	public static function DTOutBrowser($s_datetime)
	{
		//create a datetime object in the local timezone
		global $tz;
		$datetime = new DateTime($s_datetime, new DateTimeZone('UTC'));

		//change the timezone
		$datetime->setTimeZone(new DateTimeZone($tz));

		//output to a standard string format
		return $datetime->format('Y-m-d H:i:s');
	}
}