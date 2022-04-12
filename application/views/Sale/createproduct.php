  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Management
        <small>Create Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
             <?php
              $success_msg20= $this->session->flashdata('success_msg20');
              
              $error_msg20= $this->session->flashdata('error_msg20');

                  if($success_msg20){                    
                  
                   echo "<p style='color: green; font-weight: bolder; text-align: left;'>". $success_msg20; 
                  
                  }

                  if($error_msg20){
                    
                    
                   echo "<p style='color: red; font-weight: bolder;text-align: left;'>". $error_msg20;                    
            
                  }
                  ?>
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
            <br>
           <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/SalePanel/Productcreated">
 
                  
       
                <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">ProductName</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="productname" name="productname" placeholder="ProductName" style="width:40%;">                                                       
                    </div>
                </div>
           
              <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Save</button>
                      <br><br>
                    </div>
                  </div>
                </form>
              </div>
          </div>
          </div>
      </div>
      <br>
  

               <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ProductName</th>
                          
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php if (isset($pl)) { ?>
        <?php foreach ($pl as $si) { ?>
                <tr>
                  <td><?php echo $si->productname; ?></td>
   <td>
     <?php
      $previllage=$_SESSION['type'];      

               if($previllage<1){?>
       <a onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="<?php echo base_url();?>index.php/SalePanel/Delproduct?id=<?php echo $si->id; ?>" title="Delete"><i class="fa fa-edit"></i></a>
     <?php } ?>

  </td>
                </tr>
             <?php }} ?>
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>

  </section>
</div>
 