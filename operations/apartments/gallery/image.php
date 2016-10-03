<?php

class Image{
	
	private $id,$apid,$img;
	
	public function getId(){
		return $this->id;
	}
	
	public function getApartmentId(){
		return $this->apid;
	}
	
	public function getImage(){
		return $this->img;
	}
};