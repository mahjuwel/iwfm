 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">POS</li>

      </ol>
    </section>

   

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->

      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">

<p class="alert alert-danger test2" role="alert" style="display: none;">
  Please input value or correct value & try again!
</p>

          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          
          <address>
                  <div class="form-group">
                    <div class="col-sm-8">                
                <select class="form-control select2" name="supplier" style="width: 100%;" required="">
                  <option selected="active">Walk-in-Client</option>
                  <?php if(isset($cusSelect2)){ ?>
                  <?php foreach ($cusSelect2 as $cus) { ?>                   
                  <option><?php echo $cus->cname; ?></option>               
                <?php }} ?>
                </select>
                    </div>
                    <div class="col-sm-4">   

             <button type="button"  class="md-trigger" data-modal="modal-11" style="background-color: orange;"><i class="glyphicon glyphicon-plus"></i>
                </button>

                </div>
                </div><br>
             <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="refn" name="refn" placeholder="Reference Note">
                    </div>
                  </div><br>
            <form id="frm-cms2" method="post">

              <div class="form-group">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="codesearch" name="codesearch" placeholder="Search Product by code or you can scan" onmouseover="this.focus();" onBlur="addProduct()">
                    </div>
                       <input name="Submit2" type="submit" value="submit" hidden="" />
                  </div> 
</form>
                  <br>
                   <br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          
        
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <br>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped" style="width: 95%; float: center;">

            <thead>
              

                
            <tr>
              <th style="width: 23%">Product</th>
              <th style="width: 7%">Photo</th>
              <th style="width: 10%">Price</th>
              <th style="width: 10%">Qty</th>
              <th style="width: 10%">Subtotal</th>
              <th style="width: 2%">Action</th>

            </tr>
            </thead>
            <tbody>
          <?php if (isset($pos)) { ?>
        <?php foreach ($pos as $cart) { ?>

            <tr>
              <td style="width: 23%"><?php echo $cart->productName; ?></td>
              <td style="width: 7%"><img src="<?php echo base_url()?><?php echo $cart->image; ?>" alt="image" width="50px" height="50px" style="padding: 1px;"/></td>

              <td style="width: 10%"><?php echo $cart->sellprice; ?></td>
                  <td style="width: 10%">
                 <form action="<?php echo base_url()?>index.php/Accounting/UpdateCart" method="post">
                    <input type="number" name="quantity" style="width: 70px;text-align: center;" value="<?php echo $cart->qty;?>"/>
                    <input type="hidden" name="crmid" value="<?php echo $cart->id; ?>"/>
                    <input type="submit" value="Update" style="background: #333 none repeat scroll 0 0;
    border: 1px solid #000;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-size: 15px;
    padding: 2px 5px;
" />
                  </form>
              <td style="width: 10%"><?php echo $cart->sellprice*$cart->qty; ?></td>
              <td style="width: 2%"><i class="fa fa-trash-o"></i></td>
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
            <table class="table">
              <tr>
                <th style="width:40%">Total Items:</th>
                <td><?php if(isset($pos2)) echo $pos2[0]->q; ?>
</td>
              </tr>
               <tr>
                <th style="width:30%">Subtotal:</th>
                <td><input type="text" name="subt" id="subt" value="<?php if(isset($pos2)) echo $pos2[0]->subt; ?>" readonly=""></td>
              </tr>
                 <tr>
                <th>Tax (10%)</th>
                <td><input type="text" name="tax" id="tax" value="<?php if(isset($pos2)) echo $pos2[0]->tax; ?>" readonly=""></td>
              </tr>
               <tr>
                <th>Shipping:</th>
                <td><input type="text" name="shipping" id="shipping" ></td>
              </tr>
                  <tr>
                <th>Total</th>
                <td><input type="text" name="total" id="total"></td>
              </tr>
               <tr>
                <th style="width:30%">Discount:</th>
                <td><input type="text" name="discount" id="discount"></td>
              </tr>        
             
              <tr>
                <th>Grand Total:</th>
                <td><input type="text" name="gtotal" id="gtotal" readonly="" ></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

  <div class="md-modal md-effect-11" id="modal-11">
      <div class="md-content">
        <h4 style="text-align: center;padding-top: 5px; padding-bottom: 5px;padding-right: 5px;">Customer<button class="md-close" style="float: right;">Close</button><br>
</h4>
        <div style="background-color: #868815;">
          <ul>
           <div class="row">
        <div class="col-md-12">
            <br>
    <form class="form-horizontal" method="post" id="frm-cms">
           <div class="tab-pane active" id="settings">
                  <div class="form-group">
                    <label for="cname" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cname" name="cname" required="" placeholder="Customer Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">Mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mobile" name="mobile" required="" placeholder="Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <br>
                   <div class="col-sm-12">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    </div>
                  </div>

                </form>
              </div>
            

          </ul>
       
       
        

        </div>
      </div>
    </div>


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="md-trigger pull-right btn btn-success" data-modal="modal-13"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-print"></i> Print Order           
          </button>
          <button type="button" class="btn btn-warning pull-right" style="margin-right: 5px;">
            <i class="fa fa-warning"></i> Hold
          </button>
           <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
            <i class="fa  fa-refresh"></i> Cancel
          </button>
        </div>
      </div>
        <div class="md-modal md-effect-13" id="modal-13">
      <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
          <p>This is a modal window. You can do the following things with it:</p>
          <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close">Close me!</button>
        </div>
      </div>
    </div>
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
