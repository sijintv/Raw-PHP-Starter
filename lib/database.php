<?php
class Database{
	private $servername = "";
	private $username = "";
	private $password = "";
	private $dbname = "";
	//private $port = "";

	function __construct(){
		this->$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error)die("database error");
	}

}
?>
