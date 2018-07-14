<?php
include 'header.php';
$getallmanuf = new Manufacturer();
$data=$getallmanuf->getAllManufacturer();

?>
<div class="container">


<a href='index.php' class="btn btn-primary btn-lg active" >View Inventory</a>

    <a href='add_manufacturer.php' class="btn btn-primary btn-lg active" >Add Manufacturer</a>

  <h2>Add Model</h2>
  <form class="form-horizontal" action="" method='post'>
    <div class="form-group">
      <label class="control-label col-sm-2" for="manuf_name">Select Manufacturer:</label>
      <div class="col-sm-6">
       

<select name='manuf_name' id='manuf_name'>
  <option value=''>Select</option>
              <?php
foreach ($data as $data1) {
?>
<option value="<?php echo $data1['name']; ?>"><?php echo $data1['name']; ?></option>

<?php
}
?>
</select>

      <span id='error_message_manuf_name' class='text-danger'></span>   
        
      </div>
      
    </div>


        <div class="form-group">
      <label class="control-label col-sm-2" for="model_name">Model Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="model_name" placeholder="Model Name" name="model_name">
        <span id='error_message_name' class='text-danger'></span>
      </div>
    </div>


            <div class="form-group">
      <label class="control-label col-sm-2" for="model_colour">Model Colour:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="model_colour" placeholder="Model Colour" name="model_colour">
        <span id='error_message_colour' class='text-danger'></span>
      </div>
    </div>
   
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="button" name='add_model' id='add_model' class="btn btn-primary btn-lg active" value='Add Model' >
        <span id='error_message_submit' class='text-danger'></span>
      </div>
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){


    $("#manuf_name").change(function(){
      if($("#manuf_name").val()=='')
      {
      $("#error_message_manuf_name").html('manufacturer name is required');
      }
      else
      {
        $("#error_message_manuf_name").html('');
      }
    });


    $("#model_colour").blur(function(){
      if($("#model_colour").val()=='')
      {
      $("#error_message_colour").html('model colour is required');
      }
      else
      {
        $("#error_message_colour").html('');
      }
    });


    $("#model_name").blur(function(){
      if($("#model_name").val()=='')
      {
      $("#error_message_name").html('model name is required');
      }
      else
      {
        $("#error_message_name").html('');
      }
    });


    $("#add_model").click(function(){

     
        var returnvar=true;
        var man_name=$("#manuf_name").val();
        var mod_name=$("#model_name").val();
        var mod_colour=$("#model_colour").val();

        if(man_name=='')
        {
          $("#error_message_manuf_name").html('manufacturer name is required');
        $("#manuf_name").change();
        returnvar =false;
        }

        if(mod_name=='')
        {
        $("#model_name").blur();
        returnvar =false;
        }

        if(mod_colour=='')
        {
        $("#model_colour").blur();
        returnvar =false;
        }

        if(returnvar==true)
        {
          
          $.ajax({
            url:'model_submit.php',
            method:'post',
            data:{manufacturer_name:man_name,model_name:mod_name,model_colour:mod_colour},
            success:function(data)
            {   
            //alert(data);         
          $("#error_message_submit").html(data);
            }


          });
        }
    });
});
</script>

<?php
include 'footer.php';
?>

