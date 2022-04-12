 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Customer</li>

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
                  <th>Invoice</th>
                  <th>Customer Name</th>
                  <th>Mobile</th>
                  <th>Total Tk</th>
                  <th>Paid</th>
                  <th>Due</th>
                  <th>PaymentMethod</th>
                  <th>Note</th>
                  <th>EntryDate</th>
                  <th>DepartureDate</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($poscd)) { ?>
        <?php foreach ($poscd as $pscd) { ?>
                <tr>
                  <td><a href="<?php echo base_url(); ?>index.php/Accounting/invoice?invoice=<?php echo $pscd->invoice; ?>"><?php echo $pscd->invoice; ?></a></td>
                  <td><?php echo $pscd->cname; ?></td>
                  <td><?php echo $pscd->mobile; ?></td>

                  <td><?php echo $pscd->gtotal; ?>
                  </td>
                  <td><?php echo $pscd->paid; ?></td>
                  <td style="color: red; font-weight: bolder;"><?php echo $pscd->due; ?></td>
                  <td><?php echo $pscd->payment_method; ?></td>
                  <td><?php echo $pscd->note; ?></td>                  
                  <td><?php echo $pscd->trdate; ?></td>
                 <td><?php echo $pscd->deliveryDate; ?></td>


                  <td>
 <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Next Pay" onclick="edit_payment('<?php echo $pscd->invoice; ?>')"><i class="fa fa-money"></i></a> 
</td>
                </tr>
             <?php }} ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>Invoice</th>
                  <th>Customer Name</th>
                  <th>Mobile</th>
                  <th>Total Tk</th>
                  <th>Paid</th>
                  <th style="color: red;">Due</th>
                  <th>PaymentMethod</th>
                  <th>Note</th>
                  <th>EntryDate</th>
                  <th>DepartureDate</th>
                  <th>Action</th>

                </tr>
                </tfoot>
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
    
function addProduct(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/addProduct",
  type: "POST",
  data: $('#frm-cms2').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Hurruh!", "Added to Cart Successfully", "success");
  reload_table2();
}

   },
   error: function(){

           $('.test2').show();

                setTimeout(function(){ $('.test2').hide();  }, 3000);
                //if success reload ajax table

                $('#modal_form').modal('hide');
   }
 });

}
  </script>

<script type="text/javascript">
  function updQty(){
    $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/updateCart",
  type: "POST",
  data: $('#frm-cart').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good Job!", "Cart Updated Successfully", "success");
  reload_table2();
}

   },

    error: function(){
     alert('Error Occurred..');
   }
 });

}
</script>
  <script type="text/javascript">
    
function pospayment(){
 $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/payment",
  type: "POST",
  data: $('#pospay').serialize(),
  dataType: 'json',
  success: function(data){
 if(data.status){
 swal("Good job!", "Payment Successful", "success");
 $('#modal-13').modal('hide'); 
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
  <script type="text/javascript">
  var save_method; 
// $(document).ready(function() {
//     $('#addOut').click(function(){
//  $('#myModel').modal('show');
//  });

// $('#btn-create').on('click', function(){

// $.ajax({
//   url: "<?php echo base_url() ?>index.php/Inventory/createOut",
//   type: "POST",
//   data: $('#frm-create').serialize(),
//   dataType: 'json',
//   success: function(data){
// if(data.status){
//   $('frm-create')[0].reset();
// alert('Successfully Recorded');
// }
//   },
//   error: function(){
//     alert('Error Occurred..');
//   }
// });

// });
function edit_payment(invoice)
{
   save_method = 'update';
   // $('#form')[0].reset(); // reset form on modals
    // $('.form-group').removeClass('has-error'); // clear error class
    // $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo base_url() ?>index.php/Accounting/pay_edit/" + invoice,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="invoice"]').val(data.invoice);
            $('[name="cname"]').val(data.cname);
            $('[name="mobile"]').val(data.mobile);
            $('[name="gtotal"]').val(data.gtotal);  
            $('[name="paid"]').val(data.paid);            
            $('[name="due"]').val(data.due);            
            $('[name="payment_method"]').val(data.payment_method);            
            $('[name="ship_via"]').val(data.ship_via);            
            $('#myModal15').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Next Payment'); // Set title to Bootstrap modal title




        },
        error: function ()
        {
            alert('Error get data from ajax');
        }
    });
}


</script>

<script type="text/javascript">
 function savepaymentUpdate(){

   $.ajax({
  url: "<?php echo base_url() ?>index.php/Accounting/updatepay",
  type: "POST",
  data: $('#frm-payupdate77').serialize(),
  dataType: 'json',
   success: function(data){
 if(data.status){
 swal("Good job!", "Updated Successful", "success");
 $('#myModal15').modal('hide'); 
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