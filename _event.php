<?php 

class itsEventDate {
	public $startDate;
	public $startTime;
	public $endDate;
	public $endTime;
}

class itsEvent {
	
	public $title;
	public $type;
	public $dates;
	public $url;
	
	public function __construct() {
		$dates = array();
	}	
		
	public function toJson() {
		
	}
}
?>