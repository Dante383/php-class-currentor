<?php
/*
Currentor by Dante383
https://github.com/Dante383/php-class-currentor
*/ 

class Currentor 
{
	private $api = 'http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';
	
	function convertCurrency ($amount, $from, $to)
	{
		$xml = simplexml_load_string(file_get_contents($this->api))->Cube->Cube->Cube;
		$fromRate = false;
		$toRate = false;

		foreach ($xml as $currency)
		{
			if ($currency['currency'] == strtoupper($from)) 
				$fromRate = $currency['rate'];
			
			if ($currency['currency'] == strtoupper($to))
				$toRate = $currency['rate'];
		}
		if ($fromRate == false || $toRate == false)
			return false;
		
		return $toRate/$fromRate;
	}
}