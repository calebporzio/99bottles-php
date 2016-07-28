<?php

class Bottles
{
	public function song()
	{
		return $this->verses(99, 0);
	}

	public function verses($starting, $ending = null)
	{
		$range = range($starting, $ending);
		
		array_reverse($range);
		
		return implode("\n", array_map(function($i) {
			return $this->verse($i);
		}, $range));
	}

	public function verse($number)
	{
		$nextNumber = $number - 1;

		switch ($number) {
			case 0:
				return "No more bottles of beer on the wall, " .
					"no more bottles of beer.\n" .
					"Go to the store and buy some more, " .
					"99 bottles of beer on the wall.\n";
				break;

			case 1:
				return "1 bottle of beer on the wall, " .
					"1 bottle of beer.\n" .
					"Take it down and pass it around, " .
					"no more bottles of beer on the wall.\n";
				break;

			case 2:
				return "2 bottles of beer on the wall, " .
					"2 bottles of beer.\n" .
					"Take one down and pass it around, " .
					"1 bottle of beer on the wall.\n";
				break;
			
			default:
				 return "$number bottles of beer on the wall, " .
					"{$number} bottles of beer.\n" .
					"Take one down and pass it around, " .
					"{$nextNumber} bottles of beer on the wall.\n";
				break;
		}
	}
}