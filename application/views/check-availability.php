<script>
function checkAvailability() {
  $("#loaderIcon").show();
  jQuery.ajax({
  url: "<?php echo base_url() ?>index.php/Inventory/Prod",
  data:'productName='+$("#productName").val(),
  type: "POST",
  success:function(data){
    $("#user-availability-status").html(data);
    $("#loaderIcon").hide();
  },
  error:function (){}
  });
}
</script>
<tr>
<div id="frmCheckUsername">
  <label>Student ID:</label>
  <input name="productName" type="text" id="productName" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>    
</div>
<p><img src="<?php echo base_url()?>images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
 </tr
 