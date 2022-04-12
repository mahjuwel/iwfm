
<div class="content-wrapper" style="float: center">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice 
        <small>#<?php echo $invoice[0]->invoice;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href='<?php echo base_url() ?>index.php/Accounting/Pos'>Back</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        
      </div>
    </div> -->

    <!-- Main content -->
    <section class="invoice" style="width: 200px;">
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:9px;padding:4px 2px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:9px;font-weight:normal;padding:4x 2px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-k9ij{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:right;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-k9ij" colspan="6"><span><img src="<?php  echo base_url(); ?>images/aladinlogo.jpg" class="img-circle" alt="LogoImage" width='30px' height='20px'></span></span><span style="font-weight:bold">Aladin's Park Ltd</span><br>Branch: <?php echo $invoice[0]->branch;?><br>          
</th>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="6">
    <b>Invoice #<?php echo $invoice[0]->invoice;?></b><br>
       Customer: <?php echo $invoice[0]->cname;?><br>
        Mobile: <?php echo $invoice[0]->mobile;?><br>
          PS:<?php
                                     if($invoice[0]->due>0){
                                      echo 'Due';
                                    }else{
                                     echo 'Fully Paid';
                                    }
                                  
                                     ?><br>
          Entry:<?php $date=date_create($invoice[0]->trdate); echo  date_format($date,"d-m-Y"); ?><br>
          <?php if(isset($invoice[0]->deliveryDate)){ ?>
           Exit: </b><?php $date=date_create($invoice[0]->deliveryDate); echo  date_format($date,"d-m-Y"); ?><br>
           <?php } ?>
         Made by <?php echo $invoice[0]->user_id;?>
        
    </td>
    
  </tr>
  <tr>
    <td class="tg-0lax" colspan="6">
         <tr>
              <th>Product Code</th>
              <th>Unit<br>Price </th>
              <th>Qty</th>
              <th>Total</th>
            </tr>
         <?php $Invd = json_decode($invoice[0]->productDetails); 

                                  //echo "<pre>";
                                   //print_r($Invd);
                                  foreach ($Invd as $key => $value) {
                                    
                                  ?>
            <tr>
              <td><?php echo $value->productName; ?><br>(<?php echo $value->product_code; ?>)</td>
              <td><?php echo $value->sellprice; ?></td>
              <td><?php echo $value->qty; ?></td>
              <td><?php echo $value->sellprice*$value->qty; ?></td>
            </tr>
            <?php } ?>
    </td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="9">
               SubTotal(Incl. Vat): <?php echo $invoice[0]->subt;?><br>
                Discount: <?php echo $invoice[0]->discount;?><br>
             Total: <?php echo $invoice[0]->gtotal;?><br>
                Paid: <?php echo $invoice[0]->paid;?><br>
                Due: <?php echo $invoice[0]->due;?><br>
                <?php if(isset($invoice[0]->fqty)){ ?>
      <?php echo 'Food Qty: '.$invoice[0]->fqty;?>
      <?php } ?><br>
      <?php if(isset($invoice[0]->qty)){ ?>
      <?php echo '<b>Tickets: '.$invoice[0]->qty;?>
      <?php } ?><br>
      <?php if(isset($invoice[0]->note)){ ?>
      <?php echo 'Note: '.$invoice[0]->note;?>
      <?php } ?>


    </td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="6">
        Copyright@<?php echo date('Y'); ?> Aladin's Park Ltd<br>
        Developed by Al Hasan Juwel<br> All Rights Reserved
    </td>
  </tr>
</table>
     
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>