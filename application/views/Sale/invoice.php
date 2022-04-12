<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php echo $pdata[0]->invoice;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Invoice</li>
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
              <small class="pull-right">Purchase Date: <?php echo $pdata[0]->rdate;?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Fancy Jewellers Ltd.</strong><br>
            Branch: <?php echo $pdata[0]->branch; ?><br>
            Branch Manager: <b> <?php echo $pdata[0]->manger; ?>(<?php echo $pdata[0]->user_id; ?>)</b><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Customer Name: <?php echo $pdata[0]->customerName; ?></strong><br>
            Mobile: <?php echo $pdata[0]->customer_id; ?><br> 
            Address: <?php echo $pdata[0]->address; ?><br>
            Membership: <b><?php echo $pdata[0]->membership;?> </b><br>
            Email: <?php echo $pdata[0]->cemail; ?>
          </address> 
 
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?php echo $pdata[0]->invoice;?></b><br>

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
              <th>Total Price</th>
              <th>Making Charge</th>
              <th>Grand Total</th>

            </tr>
            </thead>
            <tbody>
              <?php if(isset($cartdata)){ ?>
                <?php
             
                 foreach($cartdata as $ct){ ?>
            <tr>
              <td><?php echo $ct->productName;?>(<?php if($ct->type==1){
                    echo 'GOLD';
                  }elseif ($ct->type==2) {
                    echo 'DIAMOND';
                  }; ?>-<?php if($ct->karet==1){
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
                <td><?php if(isset($pdata)) echo $pdata[0]->subtotal; ?></td>
              </tr>
              <tr>
                <th>Discount</th>
                <td><?php if(isset($pdata)) echo $pdata[0]->discount; ?></td>
              </tr>
              
              <tr>
                <th>Total</th>
                <td><?php if(isset($pdata)) echo $pdata[0]->total; ?></td>
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