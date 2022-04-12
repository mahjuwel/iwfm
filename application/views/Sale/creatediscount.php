 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Discount
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>


        <li class="active">Update</li>

      </ol>
    </section>


      <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                           
                  <th>Membership</th>
                  <th>Discount</th>                                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($dl)) { ?>
        <?php foreach ($dl as $si) { ?>
                <tr>
                  
                  <td><?php echo $si->membership; ?></td>                 
                   
                  <td><?php echo $si->discount; ?></td>
                

                  <td>
 <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="EDIT" onclick="edit_dis('<?php echo $si->id; ?>')"><i class="fa fa-money"></i></a> 
</td>
                </tr>
             <?php }} ?>
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
 
 

  <script type="text/javascript">
  var save_method; 

function edit_dis(id)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/SalePanel/edit_dis/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="discount"]').val(data.discount);
                      
            $('[name="membership"]').val(data.membership);          
            $('[name="card"]').val(data.card);     
            $('#modal-customerEdit').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('DiscountEdit'); // Set title to Bootstrap modal title




        },
        error: function ()
        {
            alert('Error get data from ajax');
        }
    });
}


</script>
 <div class="modal fade" id="modal-customerEdit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: blue; text-align: center; font-weight: bold;">Customer Register</h4>
              </div>
              <div class="modal-body">
              <form id="customerEdited2" method="post">

                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Discount</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="discount" name="discount" style="width: 75%">
                      <input type="hidden" class="form-control" id="id" name="id" style="width: 75%">
                    
                    </div>
                </div><br>
         
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Membership</label>

                    <div class="col-sm-10">
                    <select class="form-control" name="membership" style="width: 75%" required=''>
                        <option value="" selected>Choose</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>                      
                      </select>
                    
                    </div>
                </div><br>
              
              </div>
            </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="Updated2()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<script type="text/javascript">
 function Updated2(){
   $.ajax({
  url: "<?php echo base_url() ?>index.php/SalePanel/updatedis",
  type: "POST",
  data: $('#customerEdited2').serialize(),
  dataType: 'json',
   success: function(data){
 if(data.status){
 swal("Good job!", "Updated Successful", "success");
 $('#modal-customerEdit').modal('hide'); 
  reload_table();
}

   },
   error: function(){
     alert('Error Occurred..');
   }
 });

}
function timedRefresh(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
}
function reload_table()
{
window.onload = timedRefresh(1000);
}

  </script>