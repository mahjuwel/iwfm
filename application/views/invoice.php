
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice 
        <small>#<?php echo $invoice[0]->invoice;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        
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
         To
          <address>
            <strong><?php echo $invoice[0]->cname;?></strong><br>
            <?php echo $invoice[0]->address;?><br>
            <?php echo $invoice[0]->mobile;?><br>          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
  
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?php echo $invoice[0]->invoice;?></b>
          <br>
          <b>Payment Status: </b><?php
                                     if($invoice[0]->due>0){
                                      echo 'Due';
                                    }else{
                                     echo 'Fully Paid';
                                    }
                                  
                                     ?><br>
          <b>Entry: </b><?php $date=date_create($invoice[0]->trdate); echo  date_format($date,"d-m-Y"); ?><br>
          <?php if(isset($invoice[0]->deliveryDate)){ ?>
           <b>Exit: </b><?php $date=date_create($invoice[0]->deliveryDate); echo  date_format($date,"d-m-Y"); ?><br>
           <?php } ?>
         <b>Created by <?php echo $invoice[0]->user_id;?></b>

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
              <th>Product Code</th>
              <th>Unit Price </th>
              <th>Qty</th>
              <th>Total</th>
            </tr>
            </thead>
            <tbody>

                                <?php $Invd = json_decode($invoice[0]->productDetails); 

                                  //echo "<pre>";
                                   //print_r($Invd);
                                  foreach ($Invd as $key => $value) {
                                    
                                  ?>
            <tr>
              <td><?php echo $value->productName; ?>(<?php echo $value->product_code; ?>)</td>
              <td><?php echo $value->sellprice; ?></td>
              <td><?php echo $value->qty; ?></td>
              <td>Tk. <?php echo $value->sellprice*$value->qty; ?></td>
            </tr>
            <?php } ?>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
        <?php if(isset($invoice[0]->fqty)){ ?>
      <?php echo 'Food Qty: '.$invoice[0]->fqty;?>
      <?php } ?><br>
      <?php if(isset($invoice[0]->note)){ ?>
      <?php echo 'Note: '.$invoice[0]->note;?>
      <?php } ?>
</div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">SubTotal(Including Vat):</th>
                <td>Tk <?php echo $invoice[0]->subt;?></td>
              </tr>
          
              <tr>
                <th>Discount:</th>
                <td>Tk <?php echo $invoice[0]->discount;?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Tk <?php echo $invoice[0]->gtotal;?></td>
              </tr>
              <tr>
                <th>Paid:</th>
                <td>Tk <?php echo $invoice[0]->paid;?></td>
              </tr>
              <tr>
                <th>Due:</th>
                <td>Tk <?php echo $invoice[0]->due;?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
     
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>