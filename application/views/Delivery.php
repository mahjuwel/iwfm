 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Delivery
        <small>History-</small><small style="color: orange; font-weight: bolder;">Product Code: <?php if(isset($dd)) echo $dd[0]->product_code; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>index.php/Inventory/Product"><i class="fa fa-th" aria-hidden="true"></i>Delivery</a></li>

        <li class="active">History</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <?php  if(isset($dd[0]->image)) { ?>
<img src="<?php echo base_url()?><?php if(isset($dd)) echo $dd[0]->image; ?>" alt="image" width="80px" height="80px" "/>
<?php } else { ?>
<p style="color: red; font-weight: bolder;">No Photo</p>
<?php } ?>
<small class="pull-right">Date: <?php echo $date = date('Y-m-d'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
         

            <strong>Product Name: <?php if(isset($dd)) echo $dd[0]->productName; ?></strong><br>
            Supplier: <?php if(isset($dd)) echo $dd[0]->supplier; ?><br>
             Sell Price: <?php if(isset($dd)) echo $dd[0]->sellprice; ?><br>
            Buy Price: <?php if(isset($dd)) echo $dd[0]->buyprice; ?><br>

            
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
             <strong>Available: <?php if(isset($dd)) echo $dd[0]->avl; ?></strong><br>
            Total Stock: <?php if(isset($dd)) echo $dd[0]->tstock; ?><br>
            Total Delivery: <?php if(isset($dd)) echo $dd[0]->tout; ?><br>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Total Orders: <?php if(isset($dd)) echo $dd[0]->ord; ?></b> <br>
          Total Sell Price:<?php if(isset($dd)) echo $dd[0]->tsp; ?><br>
          Total Buy Price:<?php if(isset($dd)) echo $dd[0]->tbp; ?><br>
          <small style="color: green; font-weight: bolder;">Total Profit: <?php if(isset($dd)) echo $dd[0]->prft; ?></small>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="md-modal md-effect-11" id="modal-11">
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
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <br>
       <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Invoice</th>
                  <th>Chalan</th>
                  <th>Delivery</th>
                   <th>Note</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
              <?php foreach ($dd2 as $del) { ?>

                <tr>
                  <td><a href="<?php echo base_url();?>index.php/Accounting/invoice?invoice=<?php echo $del->invoice ?>"><?php echo $del->invoice; ?></td>
                  <td><?php echo $del->chalan; ?></td>
                  <td><?php echo $del->out; ?></td>
                 <td><?php echo $del->note; ?></td>
                  <td><?php echo $del->ex_date; ?></td>

                </tr>
<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>Invoice</th>
                  <th>Chalan</th>
                  <th>Delivery</th>
                   <th>Note</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- /.row -->

  
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <script type="text/javascript">
    $( document ).ready(function() {
   $( "#clickButton" ).trigger( "click" );
});
    
  </script>