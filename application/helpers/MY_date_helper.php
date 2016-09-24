<?php 
	function get_date($time){
		$format = '%d-%m-%y';
		/*if ($full_time) {
			$format = $format .' %H:%i:%s';
		}*/
		$date = mdate($format, $time);
		return $date;
	}
	function get_month($time){
		$format = '%m';
		/*if ($full_time) {
			$format = $format .' %H:%i:%s';
		}*/
		$date = mdate($format, $time);
		return $date;
	}
	function get_days($time){
		$format = '%d';
		/*if ($full_time) {
			$format = $format .' %H:%i:%s';
		}*/
		$date = mdate($format, $time);
		return $date;
	}
 ?>