<?php
class Reservation{
	
	private $id,$cid,$cindate,$coutdate,$recorded,$apartment,$usid;
	
	public function getId(){
		return $this->id;
	}
	
	public function getCustomerId(){
		return $this->cid;
	}
	
	public function getCheckInData(){
		return $this->cindate;
	}
	
	public function getCheckOutDate(){
		return $this->coutdate;
	}
	
	public function getRecordedDate(){
		return $this->recorded;
	}
	
	public function getApartment(){
		return $this->apartment;
	}
	
	public function getUserId(){
		return  $this->usid;
	}
};