<?php
include 'header.php';
$inv3 = new Model();
if(!empty($_GET['id']))
{
$id=$_GET['id'];
}
else
{
  $id='';
}
$data1 = $inv3->sold($id);
header('Location: index.php');
?>
<?php
include 'footer.php';
?>