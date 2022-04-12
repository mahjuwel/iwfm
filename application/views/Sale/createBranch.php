  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Branch
        <small>Create Branch</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
    
        <li class="active">Branch</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
             <?php
              $success_msg20= $this->session->flashdata('success_msg20');
              
              $error_msg20= $this->session->flashdata('error_msg20');

                  if($success_msg20){                    
                  
                   echo "<p style='color: green; font-weight: bolder; text-align: left;'>". $success_msg20; 
                  
                  }

                  if($error_msg20){
                    
                    
                   echo "<p style='color: red; font-weight: bolder;text-align: left;'>". $error_msg20;                    
            
                  }
                  ?>
              
            <br>
           <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/SalePanel/Branchcreated">
 
                  
       
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">BranchName</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="branch" name="branch" placeholder="BranchName" style="width:40%;">                                                       
                    </div>
                </div>
           
              <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Save</button>
                      <br><br>
                    </div>
                  </div>
                </form>
              </div>
          </div>
          </div>
      </div>
      <br>
  

             <div class="modal modal-success fade" id="modal-success4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Product</h4>
              </div>
        <form action="<?php echo base_url(); ?>index.php/SalePanel/CreateItem" method="post" class="form-horizontal">
              <div class="modal-body">
                 <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Product</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="item" name="item" placeholder="Create Product">
                    </div>
                    <br>
                  </div>  

                      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-outline">Add</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>  
          
    
     

  </section>
</div>
 <script type="text/javascript">


      $('.steak').select2({
        placeholder: '--- Select Steak# ---',
        ajax: {
          url: '<?php echo base_url();?>index.php/Inventory/steak',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.AC_NO').select2({
        placeholder: '--- Select CARD#---',
        ajax: {
          url: '<?php echo base_url();?>index.php/AssetManagement/CardNo',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
  
  <script type="text/javascript">
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  </script>
<script type="text/javascript">
   $(function () {
    var totalval = $('input:text[id$=totalval]').keyup(foo);
    var pergramprice = $('input:text[id$=pergramprice]').keyup(foo);
    var tweight = $('input:text[id$=tweight]').keyup(foo);            
    var makingcharge = $('input:text[id$=makingcharge]').keyup(foo);   
       function foo() {
        var value1 = totalval.val();
        var value2 = pergramprice.val();
        var value3 = tweight.val();   

        if(IsNumeric(value3)){
        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value4 = parseFloat(value1)-(parseFloat(value2)*parseFloat(value3));
        $('input:text[id$=makingcharge]').val(value4);
        }}}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>

     