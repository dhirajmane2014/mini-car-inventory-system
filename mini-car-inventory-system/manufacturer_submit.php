<?php
include 'Database.php';
include 'Manufacturer.php';

if(!empty($_POST['manufacturer_name']))
{
$manufacturer=$_POST['manufacturer_name'];
$manuf = new Manufacturer();
$res=$manuf->insertManufacturer($manufacturer);
if($res===TRUE)
{
echo 'manufacturer added successfully';

}
else
{
echo 'manufacturer not added successfully';
}
}
?>
