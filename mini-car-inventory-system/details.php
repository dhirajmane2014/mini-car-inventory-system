<?php
include 'header.php';
$inv1 = new Model();
if(!empty($_GET['mod']))
{
$mod=$_GET['mod'];
}
else
{
  $mod='';
}
$data1 = $inv1->getAllModel($mod);
?>

    <a href='add_manufacturer.php' class="btn btn-primary btn-lg active" >Add Manufacturer</a>
<a href='add_model.php' class="btn btn-primary btn-lg active" >Add Model</a>


  <h2>Inventory</h2>
  
<table id="table_id1" class="display">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Manufacturer Name</th>
            <th>Model Name</th>
            <th>Model Colour</th>
            <th>Sold</th>
        </tr>
    </thead>
    <tbody>
      <?php
      
foreach($data1 as $data2)
{
  ?>

        <tr>

            <td><?php echo $data2['id'];?></td>
            <td><?php echo $data2['man_name'];?></td>
            <td><?php echo $data2['mod_name'];?></td>
            <td><?php echo $data2['mod_colour'];?></td>
            <td><u><a href='delete.php?id=<?php echo $data2['id']; ?>'><?php echo 'Sold';?></a></u></td>
          
        </tr>
<?php

}
?>
      


    </tbody>
</table>
  
</div>



<?php
include 'footer.php';
?>
<script>
  $(document).ready( function () {
    $('#table_id1').DataTable();
} );
</script>
