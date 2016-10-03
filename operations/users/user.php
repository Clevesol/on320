<?php

class User{
	private $id,$uname,$pword,$utype;
	
	public function getId(){
		return $this->id;
	}
	
	public function getUname(){
		return $this->pword;
	}
	
	public function getType(){
		return $this->utype;
	}
}