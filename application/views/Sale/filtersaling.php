<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small style="color: red; font-weight: bolder;"><?php if($this->session->userdata('customer_id')!=''){
            echo 'Mobile#: '.$this->session->userdata('customer_id').'';

          }
          ?>
          <?php if($this->session->userdata('customerName')!=''){
            echo 'customerName: '. $this->session->userdata('customerName');
          } ?>
          <?php if($this->session->userdata('membership')!=''){
            echo 'Membership: '. $this->session->userdata('membership');
          } ?>
          <?php if($this->session->userdata('address')!=''){
            echo 'Address: '. $this->session->userdata('address');
          } ?>

          <?php if($this->session->userdata('card')!=''){
            echo 'Card#: '. $this->session->userdata('card').'';
          } ?>
         <!--  <?php if($this->session->userdata('makingcharge')!=''){
            echo 'MakingCharge: '. $this->session->userdata('makingcharge').'';
          } ?>
          <?php if($this->session->userdata('subtotal')!=''){
            echo 'Sub-total: '. $this->session->userdata('subtotal');
          } ?>         
          <?php if($this->session->userdata('discount')!=''){
            echo 'Discount: '. $this->session->userdata('discount').'';
          } ?> -->
          <?php if($this->session->userdata('branch1')!=''){
            echo 'Branch: '. $this->session->userdata('branch1').'';
          } ?>
        
          <?php if($this->session->userdata('user_id2')!=''){
            echo 'Manager ID: '. $this->session->userdata('user_id2').'';
          } ?>
          <?php if($this->session->userdata('mrdate1')!='' && $this->session->userdata('mrdate2')!=''){
            echo 'Purchase Date Range: '. $this->session->userdata('mrdate1');
             echo ' AND '. $this->session->userdata('mrdate2');

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='01'){
            echo 'DateofBirth: January';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='02'){
            echo 'DateofBirth: February';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='03'){
            echo 'DateofBirth: March';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='04'){
            echo 'DateofBirth: April';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='05'){
            echo 'DateofBirth: May';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='06'){
            echo 'DateofBirth: June';

          } ?>
          <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='07'){
            echo 'DateofBirth: July';

          } ?>
           <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='08'){
            echo 'DateofBirth: August';

          } ?>
 <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='09'){
            echo 'DateofBirth: September';

          } ?>
 <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='10'){
            echo 'DateofBirth: October';

          } ?>
           <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='11'){
            echo 'DateofBirth: November';

          } ?>
 <?php if($this->session->userdata('dobsearch')!=''&&$this->session->userdata('dobsearch')=='12'){
            echo 'DateofBirth: December';

          } ?>
 

        <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='01'){
            echo 'Anniversary: January';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='02'){
            echo 'Anniversary: February';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='03'){
            echo 'Anniversary: March';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='04'){
            echo 'Anniversary: April';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='05'){
            echo 'Anniversary: May';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='06'){
            echo 'Anniversary: June';

          } ?>
          <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='07'){
            echo 'Anniversary: July';

          } ?>
           <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='08'){
            echo 'Anniversary: August';

          } ?>
 <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='09'){
            echo 'Anniversary: September';

          } ?>
 <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='10'){
            echo 'Anniversary: October';

          } ?>
           <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='11'){
            echo 'Anniversary: November';

          } ?>
 <?php if($this->session->userdata('annisearch')!=''&&$this->session->userdata('annisearch')=='12'){
            echo 'Anniversary: December';

          } ?>
         
          <?php if($this->session->userdata('sfl')!='' && $this->session->userdata('sfl2')!=''){
            echo 'Price Range: '. $this->session->userdata('sfl');
             echo ' AND '. $this->session->userdata('sfl2');

          } ?>
    <?php if($this->session->userdata('ords')!='' && $this->session->userdata('ordb')!=''){
            echo 'Order No Range: '. $this->session->userdata('ords');
             echo ' AND '. $this->session->userdata('ordb');

          } ?>
          
          <br></small>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Filter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <p style="text-align: center;"><span style="font-weight: bold;">Fancy Jewellers Ltd</span><br><small>Membership Eligible Decider</small></p>

        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
<!--               <h3 class="box-title">Hover Data Table</h3>
 -->            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table-responsive table-bordered table-hover">
                 <p><span style="float: right;"><a href="<?php echo base_url();?>index.php/SalePanel/DownloadCSV">Download</a></span></p>
                <thead>
                <tr style="color: black; background-color: #B7DEE8; font-weight: bold">
                      <th>
                  <span style="text-align: center;">#</span>
                </th> 
                 
              <th><form id="myForm" method="POST" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                  <input type="text" class="form-control" id="customer_id" name="customer_id" style="width: 80%" placeholder="Mobile#">
                <input name="Submit1" type="submit" value="MobileNo" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
            </form>
            </th> 
              <th>
                  <form id="myForm2" method="POST" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                    <input type="text" class="form-control" id="customerName" name="customerName" style="width: 80%" placeholder="CustomerName">
                  
                <input name="Submit" type="submit"  value="CustomerName" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
            </th> 
                
                    
                          
                   <th>
                  <form id="myForm2" method="POST" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                  <select class="form-control select2" name="membership">
                  <option selected value="">All</option>
                  <?php if(isset($fltmship)){ ?>
                  <?php foreach ($fltmship as $fltmship) { ?>                   
                  <option value="<?php echo $fltmship->membership; ?>"><?php echo $fltmship->membership; ?></option>               
                <?php }} ?>
                </select>
                <input name="Submit" type="submit"  value="Membership" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form></th> 
                <th>
                  <form id="myForm2" method="POST" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                    <input type="text" class="form-control" id="card" name="card" style="width: 80%" placeholder="Card#">
                  
                <input name="Submit" type="submit"  value="Card#" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
            </th>
             
                   
                     <th height="25" width="30">
                      <form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                   <input type="text" class="form-control" name="ords" placeholder="OrderNo(Small)">
                   <input type="text" class="form-control" name="ordb" placeholder="OrderNo(Bigger)">
                <input name="Submit" type="submit"  value="OrderNo" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
                    </th> 
                      <th height="25" width="30">
                      <form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                   <input type="text" class="form-control" name="sfl" placeholder="Small Price">
                   <input type="text" class="form-control" name="sfl2" placeholder="Larger Price">
                <input name="Submit" type="submit"  value="Total Price" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
                    </th> 
                    <th height="30" width="50"><form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

            <label for="fromdate"><input type="date" name="mrdate1"></label>
             <label for="fromdate"><input type="date" name="mrdate2"></label>

        </div>
                <!-- /.input group -->
                <input name="Submit" type="submit"  value="PurchaseDate" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form></th> 
                      <th height="30" width="50"><form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">


             <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Date_of_Birth</label>

                    <div class="col-sm-10">
                    <select class="form-control" name="dobsearch" style="width: 100%">
                        <option value="" selected>Choose</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>                      
                        <option value="05">May</option>                      
                        <option value="06">Jun</option>                      
                        <option value="07">Jul</option>                      
                        <option value="08">Aug</option>                      
                        <option value="09">Sep</option>                      
                        <option value="10">Oct</option>                      
                        <option value="11">Nov</option>                      
                        <option value="12">Dec</option>                      
                     
                      </select>
                    
                    </div>
                </div>

        
                <!-- /.input group -->
                <input name="Submit" type="submit"  value="Date of Birth" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form></th>  
                      
                     <th height="30" width="50"><form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">

               <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Anniversary</label>

                    <div class="col-sm-10">
                    <select class="form-control" name="annisearch" style="width: 100%">
                        <option value="" selected>Choose</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>                      
                        <option value="05">May</option>                      
                        <option value="06">Jun</option>                      
                        <option value="07">Jul</option>                      
                        <option value="08">Aug</option>                      
                        <option value="09">Sep</option>                      
                        <option value="10">Oct</option>                      
                        <option value="11">Nov</option>                      
                        <option value="12">Dec</option>                      
                     
                      </select>
                    
                    </div>
                </div>
                <!-- /.input group -->
                <input name="Submit" type="submit"  value="Anniversary" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form></th>    

                    
                                    
                   
                    
                     
                 <th>                      
                    <form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                  <select class="form-control select2" name="branch1" style="width: 80%">
                  <option selected value="">All</option>
                  <?php if(isset($fltbranch)){ ?>
                  <?php foreach ($fltbranch as $fltbranch) { ?>                   
                  <option value="<?php echo $fltbranch->branch; ?>"><?php echo $fltbranch->branch; ?></option>               
                <?php }} ?>
                </select>
                <input name="Submit" type="submit"  value="Branch" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
                    </th>  
                    <th>                      
                    <form id="myForm2" method="post" action="<?php echo base_url() ?>index.php/SalePanel/SaleFilter">
                  <select class="form-control select2" name="user_id2" style="width: 80%">
                  <option selected value="">All</option>
                  <?php if(isset($brnu)){ ?>
                  <?php foreach ($brnu as $fltbranch) { ?>                   
                  <option value="<?php echo $fltbranch->user_id; ?>"><?php echo $fltbranch->username; ?>(<?php echo $fltbranch->user_id; ?>-<?php echo $fltbranch->branch; ?>)</option>               
                <?php }} ?>
                </select>
                <input name="Submit" type="submit"  value="Manager" style="color: black; background-color: #B7DEE8; font-weight: bold"/>
                </form>
                    </th>  
                <th>Suggested</th>
                <th>Action</th> 
                </tr>
                </thead>
                <tbody>
               <?php
               if(isset($asstsum)){ 

               ?>
               <?php 
           $i=1;
               foreach ($asstsum as $si){ ?>
                
            

                <tr>
                <td><?php echo $i; ?></td>
               
               <td><a href="<?php echo base_url(); ?>index.php/SalePanel/CustomerPurchase?mob=<?php echo $si->customer_id; ?>"><?php echo $si->customer_id; ?></a></td>  
              <td><?php echo $si->customerName; ?></td>
              <td><?php echo $si->membership; ?></td>                
                <td><?php echo $si->card; ?></td>  
                 <td><?php echo $si->orderno; ?></td>      
                  <td><?php echo $si->total; ?></td>
                  <td><?php echo $si->rdate; ?></td> 
                  <td><?php echo $si->dob; ?></td>
                  <td><?php echo $si->anniversary; ?></td> 
                  <td><?php echo $si->branch; ?></td>   
                  <td><?php echo $si->manger; ?>(<?php echo $si->user_id; ?>)</td>  

                  <td  <?php if ($si->membership=='Platinum') {
                  echo "style='color: blue; font-weight: bold';";
                }elseif ($si->membership=='Gold') {
            echo "style='color: orange;font-weight: bold';";    
                }elseif ($si->membership=='Silver') {
             echo "style='color: #F709AB; font-weight: bold';";
                }elseif ($si->membership=='' && $si->total>='150000' && $si->total<='200000') {
             echo "style='color: #F709AB; font-weight: bold';";
                }elseif ($si->membership=='' && $si->total>='200000' && $si->total<='250000') {
             echo "style='color: orange; font-weight: bold';";
                }elseif ($si->membership=='' && $si->total>'250000') {
             echo "style='color: blue; font-weight: bold';";
                }else{
             echo "style='color: black';";
                } ?>><?php if ($si->total>='150000' && $si->total<='200000') {
             echo "Silver";
                }
                if ($si->total>='200000' && $si->total<='250000') {
             echo "Gold";
                }
                if ($si->total>'250000') {
             echo "Platinum";
                }?></td>  
                   
                 <td>


             
 <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="EDIT" onclick="edit_customer('<?php echo $si->customer_id; ?>')"><i class="fa fa-money"></i></a> 
  
</td>
                </tr>
                <?php $i++; } } ?>
                
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
  </div>
  <!-- /.content-wrapper -->
   <script type="text/javascript">
  var save_method; 

function edit_customer(customer_id)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/SalePanel/edit_customer2/" + customer_id,
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
                <h4 class="modal-title" style="color: blue; text-align: center; font-weight: bold;">Update Membership</h4>
              </div>
              <div class="modal-body">
              <form id="customerEdited" method="post">

                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="customerName" name="customerName" readonly="">
                    
                    </div>
                </div><br>
               <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Mobile#</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="mobile" name="mobile" readonly="">
                    
                    </div>
                </div><br>
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">

                      <input type="email" class="form-control" id="email" name="email" readonly="">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="address" name="address" placeholder="Address" readonly="">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Birth Date</label>

                    <div class="col-sm-10">

                      <input type="date" class="form-control" id="dob" name="dob" placeholder="Birth Date" readonly="">
                    
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Anniversary</label>

                    <div class="col-sm-10">

                      <input type="date" class="form-control" id="anniversary" name="anniversary" readonly="">
                    
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
                <button type="button" class="btn btn-primary" onclick="UpdatedMem()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script type="text/javascript">
 function UpdatedMem(){
   $.ajax({
  url: "<?php echo base_url() ?>index.php/SalePanel/UpdatedMem",
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