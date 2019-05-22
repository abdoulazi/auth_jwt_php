<?php

namespace App;
use \PDO;

/**
 * 
 */
class Database
{
	private $host = 'localhost';
	private $dbname = 'api_db';
	private $username = 'root';
	private $password = 'test123'; 
	public $conn;


	public function connect() { 

		$conn = null;

		try { 

		$conn = new PDO('mysql:host=localhost;dbname=api_db', 'root', 'test123');

		} catch(PDOException $e) {
			echo " Connection error: ".$e->getMessage();
		} 
		return $conn;
	}

}