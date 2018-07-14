<?php
include 'Database.php';
include 'Manufacturer.php';
include 'Model.php';

if(!empty($_POST['manufacturer_name']) && !empty($_POST['model_name']) && !empty($_POST['model_colour']) )
{
$manufacturer=$_POST['manufacturer_name'];
$model_name=$_POST['model_name'];
$model_colour=$_POST['model_colour'];
$manuf = new Model();
$res=$manuf->insertModel($manufacturer,$model_name,$model_colour);
if($res===TRUE)
{
echo 'model added successfully';

}
else
{
echo 'model not added successfully';
}
}
?>
