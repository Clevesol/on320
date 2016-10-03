<?php
class db {
	private $servername, $username, $password,$conn;
	
	
	
	function __construct() {
		$this->initVars();
	}
	
	
	private function initVars(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
	}
	
	function openConnection() {
		$this->conn = new mysqli ( $servername, $username, $password );
		if(!$this->conn){
			throw new Exception("Connection couldn't be eshtablished");
		}
		
	/*	//Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		
		//Create database
		$sql = "CREATE DATABASE myDB";
		if ($conn->query ( $sql ) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}
		
		*/
	}
	
	
	function closeConnection() {
		$conn->close ();
		if($this->conn){
			throw new Exception("Connection couldn't be closed");
		}
	}
}