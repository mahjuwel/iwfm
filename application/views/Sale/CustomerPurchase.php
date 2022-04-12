<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer 
        <small>Purchase Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Details</li>
      </ol>
    </section>

   <!--  <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> -->

    <!-- Main content -->
     <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
              <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Customer Name: <?php echo $cps[0]->customerName; ?></strong><br>
            Mobile: <?php echo $cps[0]->customer_id; ?><br> 
            Address: <?php echo $cps[0]->address; ?><br>
            Membership: <b><?php echo $cps[0]->membership;?> </b><br>
          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
          
          </address> 
 
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

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
              <th>Invoice#</th>
              <th>Weight</th>
             <th>Making Charge</th>
              <th>Price(Incl. MakingCharge)</th> 
              <th>Discount</th>
              <th>Total Price</th>
              <th>Date</th>
              <th>Branch</th>
              <th>Branch Manager</th>
            </tr>
            </thead>
            <tbody>
              <?php if(isset($cp)){ ?>
                <?php
             
                 foreach($cp as $ct){ ?>
            <tr>
              <td><a href="<?php echo base_url(); ?>index.php/SalePanel/Invoice?invoice=<?php echo $ct->invoice; ?>"><?php echo $ct->invoice; ?></a></td>
             <td><?php echo $ct->weight;?></td>
             <td><?php echo $ct->makingcharge;?></td>
             <td><?php echo $ct->subtotal;?></td>
              <td><?php echo $ct->discount;?></td>
              <td><?php echo $ct->total;?></td>
              <td><?php echo $ct->rdate;?></td>
              <td><?php echo $ct->branch;?></td>
              <td><?php echo $ct->manger;?></td>

             
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
                <th style="width:50%">Subtotal</th>
                <td><?php if(isset($cps)) echo $cps[0]->subtotal; ?></td>
              </tr>
              <tr>
                <th>Discount</th>
                <td><?php if(isset($cps)) echo $cps[0]->discount; ?></td>
              </tr>
              
              <tr>
                <th>Total</th>
                <td><?php if(isset($cps)) echo $cps[0]->total; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
       
        </div>

      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->