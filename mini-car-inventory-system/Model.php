<?php
class Model extends Database
{


	public function getAllModelInv()
	{
		$sql="SELECT COUNT(*),mod_name,man_name,id
FROM model      
GROUP BY mod_name";
		$result1=$this->connect()->query($sql);
		return $result1;
	
	}

	public function getAllModel($mod_name)
	{
		$sql="SELECT * FROM model where mod_name='$mod_name'";
		$result2=$this->connect()->query($sql);
		return $result2;
	
	}

		public function sold($mod_id)
	{
		$sql="delete FROM model where id='$mod_id'";
		$result2=$this->connect()->query($sql);
		return $result2;
	
	}

	public function insertModel($man_name,$mod_name,$mod_colour)
	{
		$sql="insert into model (man_name,mod_name,mod_colour) values ('$man_name','$mod_name','$mod_colour')";
		$result=$this->connect()->query($sql);
		//print $result;
		return $result;
	}
}
?>