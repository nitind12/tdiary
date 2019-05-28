<?php

class My_lib {
	function days($str){
		switch($str){
		case 'Mon':
			$x = "Monday";
			break;
		case 'Tue':
			$x = "Tuesday";
			break;
		case 'Wed':
			$x = "Wednesday";
			break;
		case 'Thu':
			$x = "Thursday";
			break;
		case 'Fri':
			$x = "Friday";
			break;	
		case 'Sat':
			$x = "Saturday";
			break;
		default:
			$x = 'error';
		}

		return $x;
	}
}