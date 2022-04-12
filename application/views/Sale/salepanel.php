<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span>

           
            <form method="post" action="<?php echo base_url(); ?>index.php/SalePanel/CusInfo" name=f1>

              <div class="form-group">
                    <div class="col-sm-12">
            <body onLoad="document.f1.codesearch.focus()";>

                      <input type="text" class="form-control" name="codesearch"  placeholder="Barcode Scanning....." style="width: 20%;"/>

                    </div>
                       <input name="Submit1" type="submit" value="submit" hidden="" />
                  </div> 
</form>

</span><br>
<p style="text-align: center; color: #DB461C; font-weight: bold;"><?php if($this->session->userdata('branch')!=''){
  echo $this->session->userdata('branch');
}else{
  redirect('Login/user_logout');
}

   ?>
    
  </p>

      </h1>
      <ol class="breadcrumb">
      <li>Daily Cr.: <span style="color: red; font-weight: bold;"><a href="<?php echo base_url();?>index.php/SalePanel/Dailycr"><?php echo $dcr[0]->total; ?></a></span></li>
     <a href="">Monthly Cr.: <span style="color: red; font-weight: bold;"><a href="<?php echo base_url();?>index.php/SalePanel/Monthlycr"><?php echo $mcr[0]->total; ?></a></span>
       
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><span><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Add to Cart
              </button></span>
            
              <span style="float: right;"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2">
                Customer Register
              </button></span></h4>
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
              <small class="pull-right">Date: <?php echo date('Y-m-d'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Customer Name: <?php echo $this->session->userdata('customerName'); ?></strong><br>
            Mobile: <?php echo $this->session->userdata('mobile'); ?><br> 
            Address: <?php echo $this->session->userdata('address'); ?><br>
            Membership: <b><?php echo $this->session->userdata('membership'); ?> </b><br>
          Card#: <b><?php echo $this->session->userdata('card'); ?> </b><br>
            Email: <?php echo $this->session->userdata('cemail'); ?><br>
             DateofBirth: <?php echo $this->session->userdata('dob'); ?><br>
              Anniversary: <?php echo $this->session->userdata('anniversary'); ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
   <?php
              $success_msg= $this->session->flashdata('success_msg');
              
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){                    
                  
                   echo "<p style='color: green; font-weight: bolder; text-align: right;'>". $success_msg; 
                  
                  }

                  if($error_msg){
                    
                    
                   echo "<p style='color: red; font-weight: bolder;text-align: right;'>". $error_msg;                    
            
                  }
?>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?php echo $this->session->userdata('code3'); ?></b><br>
         <b>Previous Purchase <?php echo $salhis[0]->ptv; ?> Tk.</b><br>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Product</th>
              <th>Weight</th>
              <th>Price(Per Gram)</th>
              <th>Price</th>
              <th>Making Charge</th>
              <th>Total</th>
               <th>Action</th>

            </tr>
            </thead>
            <tbody>
              <?php if(isset($crt)){ ?>
                <?php
             
                 foreach($crt as $ct){ ?>
            <tr>
              <td><?php echo $ct->productName;?>(<?php if($ct->type==1){
                    echo 'GOLD';
                  }elseif ($ct->type==2) {
                    echo 'DIAMOND';
                  }; ?>-
                  <?php if($ct->karet==1){
                    echo '18 Karet';
                  }elseif ($ct->karet==2) {
                   echo '21 Karet';
                  }elseif ($ct->karet==3) {
                     echo '22 Karet';
                  }else{
                  echo "No Karet";
                  }
                  ?>)</td>
             <td><?php echo $ct->weight;?></td>
             <td><?php echo $ct->pergramprice;?></td>
             <td><?php echo $ct->pergramprice*$ct->weight;?></td>
              <td><?php echo $ct->makingcharge;?></td>
              <td>Tk <?php echo $ct->totalvalue;?></td>
             <td> <a onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="<?php echo base_url();?>index.php/SalePanel/DelfromCart?delid=<?php echo $ct->id; ?>" title="Delete"><i class="fa fa-edit"></i></a></td>
            </tr>
            <?php }} ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <form method="POST" action="<?php echo base_url();?>index.php/SalePanel/SaleCompleted">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal</th>
                <td><input type="text" class="form-control" id="subt" name="subtotal" placeholder="Subtotal" value="<?php if(isset($sumcrt)) echo $sumcrt[0]->tv; ?>" readonly=""></td>
              </tr>
              <tr>
                <th>Discount(<?php echo $dis[0]->dis*100; ?>%)</th>
                <td><input type="text" class="form-control" id="disc" name="discount" placeholder="Discount" value="<?php 
if($this->session->userdata('membership')=='Silver'){
  echo $sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')=='Gold'){
  echo $sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')=='Platinum'){
  echo $sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')==''){
  echo $sumcrt[0]->tv*0;
}
?>"></td>
              </tr>
              
              <tr>
                <th>Total</th>
                <td><input type="text" class="form-control" id="totall" name="total" placeholder="Total" value="<?php
if($this->session->userdata('membership')=='Silver'){
  echo $sumcrt[0]->tv-$sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')=='Gold'){
  echo $sumcrt[0]->tv-$sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')=='Platinum'){
  echo $sumcrt[0]->tv-$sumcrt[0]->tv*$dis[0]->dis;
}
if($this->session->userdata('membership')==''){
  echo $sumcrt[0]->tv-$sumcrt[0]->tv*0;}
                ?>" >
                <input type="hidden" class="form-control" id="makingcharge" name="makingcharge" value="<?php
  echo $sumcrt[0]->mc;?>" ></td>
  <input type="hidden" class="form-control" id="weight" name="weight" value="<?php
  echo $sumcrt[0]->wt;?>" >
  <input type="hidden" class="form-control" id="orderno" name="orderno" value="<?php
  echo $sumcrt[0]->orderno;?>"></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<style type="text/css">
  button:hover {
  background-color: #050505;
}

</style>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?php echo base_url();?>index.php/SalePanel/DataList" target="_blank" class="btn btn-default">Datalist</a>
          <button type="submit" class="btn btn-success pull-right button" style="">Save
          </button>
         </form>
        </div>

      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #050505; text-align: center; font-weight: bold;">CART</h4>
              </div>
              <div class="modal-body">
                   <form id="cart" method="post">
                      <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Type</label>

                    <div class="col-sm-10">
                   <select class="form-control select2" name="material" id="material" style="width: 75%;" required="">
                      <option value="">Select</option>
    <?php
    foreach($material as $row)
    {
     echo '<option value="'.$row->material_id.'">'.$row->material.'</option>';
    }
    ?>
   </select>
                    
                    </div>
                </div><br><br>
                <div class="form-group">
                   <label for="style" class="col-sm-2 control-label">Karet</label>
                   <div class="col-sm-10">
   <select name="karet" id="karet" class="form-control input-lg" style="width: 75%;">
    <option value="">Select karet</option>
   </select>
  </div>
</div>
                  <br><br>
                  <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">PerGram Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pergramprice" name="pergramprice"  style="width:75%;" readonly="">                                                      
                    </div>
                </div><br><br>
                  
                  
    
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">ProductName</label>

                    <div class="col-sm-10">
                   <select class="form-control select2" name="productName" style="width: 75%;" required="">
                        <option selected value="">Select Product</option>
                  <?php if(isset($item)){ ?>
                  <?php foreach ($item as $item) { ?>                   
                  <option value="<?php echo $item->productname; ?>"><?php echo $item->productname; ?></option>               
                <?php }} ?>
                </select>
                    
                    </div>
                </div><br><br>
             
                      
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Total Gram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tweight" name="weight" placeholder="Total Gram" style="width:75%;">                                                       
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Total Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="totalval" name="totalval" placeholder="Total Price" style="width:75%;">                                                       
                    </div>
                </div><br><br>
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Making Charge</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" id="makingcharge" name="makingcharge" placeholder="Making Charge" style="width:75%;" readonly="">                                                       
                    </div>
                </div><br><br>
                   <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Order#</label>
                    <div class="col-sm-10">
                  <input type="text" class="form-control" id="orderno" name="orderno" placeholder="Order No" style="width:75%;">                                                       
                    </div>
                </div><br><br>
                 <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Remarks</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="note" placeholder="Remarks" style="width:75%;">                   
                    </div>
                </div>
             
               </div><br>
                </form>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="crtRec()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <!-- /.modal -->
          <div class="modal fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: #050505; text-align: center; font-weight: bold;">Customer Register</h4>
              </div>
              <div class="modal-body">
              <form id="reg" method="post">

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
                <button type="button" class="btn btn-primary" onclick="register()">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
 <!--        <script type="text/javascript">
   $(function () {
    var subtotal = $('input:text[id$=subtotal]').keyup(foo);
    var discount = $('input:text[id$=discount]').keyup(foo);            
    var total = $('input:text[id$=total]').keyup(foo);   
 function foo() {
        var value1 = subtotal.val();
        var value2 = discount.val();   

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1) - parseFloat(value2);
        $('input:text[id$=total]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script> -->

<script type="text/javascript">
  function register(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/SalePanel/RegisterCustomer",
  type: "POST",
  data: $('#reg').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Great !", "Registered Successfully", "success");
 $('#modal-default2').modal('hide'); 
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
  function crtRec(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/SalePanel/CartRecorded",
  type: "POST",
  data: $('#cart').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Great !", "Added Successfully", "success");
 $('#modal-default').modal('hide'); 
  reload_table();
}

   },
   error: function(){
      alert('Please complete Registration/ Your data input is incorrect!');
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
<script type="text/javascript">
   $(function () {
    var subt = $('input:text[id$=subt]').keyup(foo);
    var disc = $('input:text[id$=disc]').keyup(foo);
    var totall = $('input:text[id$=totall]').keyup(foo);   
       function foo() {
        var value1 = subt.val();
        var value2 = disc.val();

        if(IsNumeric(value2)){
        if(IsNumeric(value1)){
        var value3 = parseFloat(value1)-parseFloat(value2);
        $('input:text[id$=totall]').val(value3);
        }}

        
    }
    function IsNumeric(input) {
        return (input - 0) == input && input.length > 0;
    }
});
      
</script>
<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/SalePanel/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#city').html('<option value="">Select City</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/SalePanel/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});
</script>
<script>
$(document).ready(function(){


 $('#material').change(function(){
  var material_id = $('#material').val();
  if(material_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/SalePanel/fetch_karet",
    method:"POST",
    data:{material_id:material_id},
    success:function(data)
    {
     $('#karet').html(data);
    }
   });
  }
  else
  {
   $('#pergramprice').html('<option value="">Select Karet</option>');
  }
 });
 
});

</script>
<script>
$(document).ready(function(){


 $('#karet').change(function(){
  var karet_id = $('#karet').val();
  if(karet_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/SalePanel/fetch_karetprice",
    method:"POST",
    data:{karet_id:karet_id},
     dataType: "JSON",
    success:function(data)
    {
     //$('#pergramprice').html(data);
     $('[name="pergramprice"]').val(data.pergramprice);
    }
   });
  }
  else
  {
   $('#pergramprice2').html('<option value="">Select Price</option>');
  }
 });
 
});

</script>