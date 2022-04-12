 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        System User
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>

        <li class="active">Users</li>

      </ol>
    </section>


      <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                    echo $error_msg;

                  }
                
                  ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>Mobile#</th>
                  <th>UserName</th>
                  <th>UserId</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Salary</th>
                  <th>Branch</th>  
                  <th>UserType</th> 
                  <th>Status</th>              
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($ul)) { ?>
        <?php foreach ($ul as $si) { ?>
                <tr>
                  
                  <td><img src="<?php echo base_url();?><?php echo $si->image; ?>" height="50" width="50"></td>
                  <td><?php echo $si->mobile; ?></td> 
                  <td><?php echo $si->username; ?></td>
                   <td><?php echo $si->user_id; ?></td>
                    <td><?php echo $si->email; ?></td>
                    <td><?php echo $si->password; ?></td>
                  <td><?php echo $si->salary; ?></td>
                  <td><?php echo $si->branch; ?></td>
                   <td><?php if($si->type>0){
                    echo "<span style='color: green; font-weight: bold'>Branch Manager</span>";
                  }else{
          echo "<span style='color: orange; font-weight: bold'>Super Admin</span>";
                  } ?></td>
                  <td><?php if($si->active>0){
                    echo "<span style='color: green; font-weight: bold'>Active</span>";
                  }else{
          echo "<span style='color: red; font-weight: bold'>Inactive</span>";
                  } ?></td>

                  <td>
 <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/User/profupdate?user_id=<?php echo $si->user_id; ?>" title="EDIT"><i class="fa fa-money"></i></a> 
  <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/User/profile?user_id=<?php echo $si->user_id; ?>" title="View"><i class="fa fa-eye"></i></a> 
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
    
function save(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/createCustomer",
  type: "POST",
  data: $('#frm-cms').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Created Successfully", "success");
 $('#modal-11').modal('hide'); 
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
window.onload = timedRefresh(3000);
}

  </script>
  <script type="text/javascript">
    function timedRefresh2(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
}
function reload_table2()
{
window.onload = timedRefresh(300);
}
  </script>
    <script type="text/javascript">
    $( document ).ready(function() {
   $( "#clickButton" ).trigger( "click" );
});
    
  </script>

  <script type="text/javascript">
  var save_method; 

function edit_customer(mobile)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/SalePanel/edit_customer/" + mobile,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="customerName"]').val(data.customerName);
            $('[name="mobile"]').val(data.mobile);
            $('[name="address"]').val(data.address);
            $('[name="anniversary"]').val(data.anniversary);  
            $('[name="dob"]').val(data.dob);            
            $('[name="email"]').val(data.email);            
            $('[name="membership"]').val(data.membership);          
            $('[name="card"]').val(data.card);     
            $('#modal-customerEdit').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('CustomerEdit'); // Set title to Bootstrap modal title




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
              <form id="customerEdited" method="post">

                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="customerName" name="customerName" placeholder="CustomerName">
                    
                    </div>
                </div><br>
               <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Mobile#</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Customer Mobile">
                    
                    </div>
                </div><br>
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">

                      <input type="email" class="form-control" id="email" name="email" placeholder="Customer Email">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Birth Date</label>

                    <div class="col-sm-10">

                      <input type="date" class="form-control" id="dob" name="dob" placeholder="Birth Date">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Anniversary</label>

                    <div class="col-sm-10">

                      <input type="date" class="form-control" id="anniversary" name="anniversary" placeholder="Anniversary">
                    
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
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Card#</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="card" name="card" placeholder="Card#">
                    
                    </div>
                </div><br><br>
              </div>
            </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="Updated()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<script type="text/javascript">
 function Updated(){
   $.ajax({
  url: "<?php echo base_url() ?>index.php/SalePanel/updatedCustomer",
  type: "POST",
  data: $('#customerEdited').serialize(),
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