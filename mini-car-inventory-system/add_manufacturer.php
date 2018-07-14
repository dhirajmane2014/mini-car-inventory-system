<?php
include 'header.php';
?>
<div class="container">

<a href='index.php' class="btn btn-primary btn-lg active" >View Inventory</a>

<a href='add_model.php' class="btn btn-primary btn-lg active" >Add Model</a>



  <h2>Add Manufacturer</h2>
  <form class="form-horizontal" action="" method='post'>
    <div class="form-group">
      <label class="control-label col-sm-2" for="manufacturer">Manufacturer:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer Name" name="manufacturer">
        <span id='error_message' class='text-danger'></span>
      </div>
    </div>
   
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="button" name='add_manufacturer' id='add_manufacturer' class="btn btn-primary btn-lg active" value='Add Manufacturer' >
      </div>
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){

    $("#manufacturer").blur(function(){
      if($("#manufacturer").val()=='')
      {
      $("#error_message").html('manufacturer name is required');
      }
      else
      {
        $("#error_message").html('');
      }
    });

    $("#add_manufacturer").click(function(){

     

        var manuf_name=$("#manufacturer").val();
        if(manuf_name=='')
        {
        $("#manufacturer").blur();
        }
        else
        {
          
          $.ajax({
            url:'manufacturer_submit.php',
            method:'post',
            data:{manufacturer_name:manuf_name},
            success:function(data)
            {   
            //alert(data);         
          $("#error_message").html(data);
            }


          });
        }
    });
});
</script>

<?php
include 'footer.php';
?>

