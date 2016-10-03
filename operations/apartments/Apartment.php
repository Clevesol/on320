<?php

class Apartment{
	
	private $id,$name,$description,$atype;
	
	public function getId(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function getApartmentType(){
		return $this->atype;
	}
};