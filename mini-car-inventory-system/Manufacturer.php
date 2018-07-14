<?php
class Manufacturer extends Database
{


	public function getAllManufacturer()
	{
		$sql="select * from manufacturer";
		$result=$this->connect()->query($sql);
		return $result;
	
	}



	public function insertManufacturer($manufacturer)
	{
		$sql="insert into manufacturer (name) values ('$manufacturer')";
		$result=$this->connect()->query($sql);
		//print $result;
		return $result;
	}
}
?>