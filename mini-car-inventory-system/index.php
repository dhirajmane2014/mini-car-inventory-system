<?php
include 'header.php';
$inv = new Model();
$data = $inv->getAllModelInv();

?>

<div class="container">

    <a href='add_manufacturer.php' class="btn btn-primary btn-lg active" >Add Manufacturer</a>
<a href='add_model.php' class="btn btn-primary btn-lg active" >Add Model</a>


  <h2>Inventory</h2>
  
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Manufacturer Name</th>
            <th>Model Name</th>
            <th>Count</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $i=1;
foreach($data as $data1)
{
  ?>

        <tr>

            <td><u><a href="details.php?mod=<?php echo $data1['mod_name']; ?>"><?php echo $i;?></a></u></td>
            <td><u><a href="details.php?mod=<?php echo $data1['mod_name']; ?>"><?php echo $data1['man_name'];?></a></u></td>
            <td><u><a href="details.php?mod=<?php echo $data1['mod_name']; ?>"><?php echo $data1['mod_name'];?></a></u></td>
            <td><u><a href="details.php?mod=<?php echo $data1['mod_name']; ?>"><?php echo $data1['COUNT(*)'];?></a></u></td>
          
        </tr>
<?php
$i++;
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
    $('#table_id').DataTable();
} );
</script>
