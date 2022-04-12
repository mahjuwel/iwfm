<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $branch=$this->session->userdata('branch'); ?>
        <small><?php echo $category=$this->session->userdata('category'); ?>(<?php echo $store=$this->session->userdata('store'); ?>)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Inventory/StoryProduct?store=<?php echo $store=$this->session->userdata('store'); ?>">Back</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Inventory/StoreProductlist">BacktoList</a></li>
        <li class="active">History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Out History of <?php echo $productName=$this->session->userdata('productName'); ?></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Active Out</th>
                  <th>Wastage Out</th>
                  <th>Total Out</th>
                  <th>Out Datetime</th>
                  <th>User</th>
                </tr>
                <?php if(isset($prohisout)){?>

                <?php 
                $i=1;

                foreach ($prohisout as $pinh) {
                  # code...
                 ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $pinh->activeoutqty ?></td>
                  <td><?php echo $pinh->wastageoutqty ?></td>
                  <td><?php echo $pinh->totaloutqty ?></td>
                  <td><?php
                 date_default_timezone_set('GMT');

//set an date and time to work with
$start = $pinh->entryDate;

//display the converted time
echo date('d-m-Y g:i A',strtotime('+00 hour +00 minutes',strtotime($start)));
 ?></td>
                  <td><?php echo $pinh->user_id ?></td>
                </tr>
               <?php ++$i; }}  ?>
               <tr>
                  <th>#</th>
                  <th>Active Qty: <?php echo $prohisout2[0]->activeoutqty; ?></th>
                  <th>Wastage Qty: <?php echo $prohisout2[0]->wastageoutqty; ?></th>
                  <th>Total Qty: <?php echo $prohisout2[0]->totaloutqty; ?></th>
                  <th>Entry Datetime</th>
                  <th>User</th>
                </tr>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>