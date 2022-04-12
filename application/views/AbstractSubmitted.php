 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Authors Abstract
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Admin/AuthorList"><i class="fa fa-home"></i> Home</a></li>

        <li class="active">Author AbstractList</li>

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
                <span style="float: right"><a href="<?php echo base_url();?>index.php/Admin/DownloadCSVAbssummitted">Download</a></span>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>AuthorName</th>
                   <th>Organization<br>University</th>
                    <th>Country</th>
                    <th>1st Abstract ID</th>
                    <th>2nd Abstract ID</th>
                  <th>1st Theme</th>  
                   <th>1st Subtheme</th> 
                    <th>1st AbstractFile</th> 
                     <th>2nd Theme</th>
                   <th>2nd Subtheme</th> 
                    <th>2nd AbstractFile</th> 
                    <th>1st Abstract<br>1stAuthorName</th>
                     <th>1st Abstract<br>1stAuthorEmail</th>
                    <th>1st Abstract<br>1stAuthorPhone</th>
                     <th>1st Abstract<br>1stAuthorAffiliation</th>
                    <th>1st Abstract<br>1stAuthorCountry</th>
                    <th>1st Abstract<br>PresentingAuthorName</th>
                     <th>1st Abstract<br>PresentingAuthorEmail</th>
                    <th>1st Abstract<br>PresentingAuthorPhone</th>
                     <th>1st Abstract<br>PresentingAuthorAffiliation</th>
                    <th>1st Abstract<br>PresentingAuthorCountry</th>
                     <th>1st Abstract<br>CorrespondingAuthorName</th>
                     <th>1st Abstract<br>CorrespondingAuthorEmail</th>
                    <th>1st Abstract<br>CorrespondingAuthorPhone</th>
                     <th>1st Abstract<br>CorrespondingAuthorAffiliation</th>
                    <th>1st Abstract<br>CorrespondingAuthorCountry</th>
                    <th>2nd Abstract<br>1stAuthorName</th>
                     <th>2nd Abstract<br>1stAuthorEmail</th>
                    <th>2nd Abstract<br>1stAuthorPhone</th>
                     <th>2nd Abstract<br>1stAuthorAffiliation</th>
                    <th>2nd Abstract<br>1stAuthorCountry</th>
                    <th>2nd Abstract<br>PresentingAuthorName</th>
                     <th>2nd Abstract<br>PresentingAuthorEmail</th>
                    <th>2nd Abstract<br>PresentingAuthorPhone</th>
                     <th>2nd Abstract<br>PresentingAuthorAffiliation</th>
                    <th>2nd Abstract<br>PresentingAuthorCountry</th>
                     <th>2nd Abstract<br>CorrespondingAuthorName</th>
                     <th>2nd Abstract<br>CorrespondingAuthorEmail</th>
                    <th>2nd Abstract<br>CorrespondingAuthorPhone</th>
                     <th>2nd Abstract<br>CorrespondingAuthorAffiliation</th>
                    <th>2nd Abstract<br>CorrespondingAuthorCountry</th>
                     <th>Date</th>
                  <th>Submitted Status</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($alist)) { ?>
        <?php 
        $i=1;
        foreach ($alist as $si) { ?>
                <tr>
                  <td><?php echo $i; ?></td> 
                  <td><?php echo $si->membername; ?></td> 
                     <td><?php echo $si->university; ?></td>
                       <td><?php echo $si->countryname; ?></td>
                        <td><?php echo $si->prof_id; ?></td>
                       <td><?php echo $si->prof_id2; ?></td>
                   <td><?php echo $si->category; ?></td>
                    <td><?php echo $si->subcategory; ?></td>
                  <td>
                    <?php if($si->titleofabstract!=''){ ?>
                      <a href="<?php echo base_url();?>index.php/Admin/firstabstract?absId=<?php echo $si->email; ?>" title="<?php echo $si->titleofabstract; ?>">1st Abstract File</a>
                      <?php } ?>
                      </td>
                   <td><?php echo $si->category2; ?></td>
                    <td><?php echo $si->subcategory2; ?></td>
                   <td>
                    <?php if($si->titleofabstract2!=''){ ?>
                      <a href="<?php echo base_url();?>index.php/Admin/secondabstract?absId=<?php echo $si->email; ?>" title="<?php echo $si->titleofabstract2; ?>">2nd Abstract File</a>
                      <?php } ?>
                      </td>
                   <td><?php echo $si->firstauthfname; ?> <?php echo $si->firstauthmname; ?> <?php echo $si->firstauthlname; ?></td>
                   <td><?php echo $si->firstauthemail; ?></td>
                   <td><?php echo $si->firstauthcontactno; ?></td>
                   <td><?php echo $si->firstauthaffiliation; ?></td>
                   <td><?php echo $si->firstauthcountryname; ?></td>
                   <td><?php echo $si->preauthfname; ?> <?php echo $si->preauthmname; ?> <?php echo $si->preauthlname; ?></td>
                   <td><?php echo $si->preauthemail; ?></td>
                   <td><?php echo $si->preauthcontactno; ?></td>
                   <td><?php echo $si->preauthaffiliation; ?></td>
                   <td><?php echo $si->preauthcountryname; ?></td>
                   <td><?php echo $si->corauthfname; ?> <?php echo $si->corauthmname; ?> <?php echo $si->corauthlname; ?></td>
                   <td><?php echo $si->corauthemail; ?></td>
                   <td><?php echo $si->corauthcontactno; ?></td>
                   <td><?php echo $si->corauthaffiliation; ?></td>
                   <td><?php echo $si->corauthcountryname; ?></td>
                    <td><?php echo $si->firstauthfname2; ?> <?php echo $si->firstauthmname2; ?> <?php echo $si->firstauthlname2; ?></td>
                   <td><?php echo $si->firstauthemail2; ?></td>
                   <td><?php echo $si->firstauthcontactno2; ?></td>
                   <td><?php echo $si->firstauthaffiliation2; ?></td>
                   <td><?php echo $si->firstauthcountryname2; ?></td>
                   <td><?php echo $si->preauthfname2; ?> <?php echo $si->preauthmname2; ?> <?php echo $si->preauthlname2; ?></td>
                   <td><?php echo $si->preauthemail2; ?></td>
                   <td><?php echo $si->preauthcontactno2; ?></td>
                   <td><?php echo $si->preauthaffiliation2; ?></td>
                   <td><?php echo $si->preauthcountryname2; ?></td>
                   <td><?php echo $si->corauthfname2; ?> <?php echo $si->corauthmname2; ?> <?php echo $si->corauthlname2; ?></td>
                   <td><?php echo $si->corauthemail2; ?></td>
                   <td><?php echo $si->corauthcontactno2; ?></td>
                   <td><?php echo $si->corauthaffiliation2; ?></td>
                   <td><?php echo $si->corauthcountryname2; ?></td>
                   <td><?php echo $si->regdate; ?></td>
                     <td>
                         <?php  if($si->firstabs_submitstatus>'0'){
                         echo "<span style='color: red; font-weight: bolder'>First Abstract Submitted</span>";
                         }else{
                         echo "<span style='color: black; font-weight: bolder'>First Abstract Not Submitted</span>";
                         }
                         ?>
                         ||
                          <?php  if($si->secondabs_submitstatus>'0'){
                         echo "<span style='color: red; font-weight: bolder'>2nd Abstract Submitted</span>";
                         }else{
                         echo "<span style='color: black; font-weight: bolder'>2nd Abstract Not Submitted</span>";
                         }
                         ?>
                         
                    
</td>
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