 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Participents(Student)
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/ActivePanel"><i class="fa fa-home"></i> Home</a></li>

        <li class="active">Participents List</li>

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
                <a href='<?php echo base_url();?>index.php/Admin/DownloadCSV' style='float: right'>Download</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>ParticipentName</th>
                   <th>ParticipentEmail</th>
                    <th>Contact</th>
                  <th>University<br>/Organization</th>  
                  <th>Address</th>
                    <th>Country</th> 
                     <th>Trans.ID</th>
                      <th>Currency</th>
                      <th>TotalAmount</th>
                      <th>StoreAmount</th>
                      <th>CardType</th>
                      <th>BankTran.ID</th>
                     <th>CardNo</th>
                     <th>Tran.DateTime</th>
                     <th>Status</th>
                </tr>
                </thead>
                <tbody>

        <?php if (isset($parlist)) { ?>
        <?php 
        $i=1;
        foreach ($parlist as $si) { ?>
                <tr>
                  <td><?php echo $i; ?></td> 
                    <td><?php echo $si->user_id; ?></td>
                    <td><?php echo $si->cus_name; ?></td>
                     <td><?php echo $si->cus_email; ?></td>
                     <td><?php echo $si->cus_phone; ?></td>
                   <td><?php echo $si->value_b; ?></td>
                    <td><?php echo $si->cus_add1; ?></td>
                    <td><?php echo $si->cus_country; ?></td>
                    <td><?php echo $si->tran_id; ?></td>
                    <td><?php echo $si->currency; ?></td>
                    <td><?php echo $si->total_amount; ?></td>
                    <td><?php echo $si->store_amount; ?></td>
                    <td><?php echo $si->card_type; ?></td>
                    <td><?php echo $si->bank_tran_id; ?></td>
                    <td><?php echo $si->card_no; ?></td>
                    <td><?php echo $si->tran_date; ?></td>
                    <td><?php if($si->risk_level=='1'){
                        echo 'Hold';
                    }
                    if($si->risk_level=='0'){
                        echo 'Success';
                    }
                    if($si->risk_level=='NULL'){
                        echo 'Unpaid';
                    }
                    ?></td>

                </tr>
             <?php $i++; }} ?>
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
