<?php

class Cin_Cout{
	
	private $id,$cusid,$resid,$rtype,$usid;
	
	public function getId(){
		
		return $this->id;
	}
	
	public function getCustomerId(){
		return $this->cusid;
	}
	
	public function getReservationId(){
		return $this->resid;
	}
	
	public function getType(){
		return $this->rtype;
	}
	
	public function getUserId(){
		return $this->usid;
	}
};