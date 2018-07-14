<?php
class Database
{
	private $severname;
	private $username;
	private $password;
	private $dbname;

	protected function connect()
	{
	$this->severname='localhost';
	$this->username='root';
	$this->password='';
	$this->dbname='test';
	$conn=new mysqli($this->severname,$this->username,$this->password,$this->dbname);
	return $conn;
	}
}
?>