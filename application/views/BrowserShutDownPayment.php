 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        NonStudentAuthorPayment
        <small>List</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/ActivePanel"><i class="fa fa-home"></i> Home</a></li>

        <li class="active">Payment List</li>

      </ol>
    </section>


      <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                    echo $error_msg;

                  }
                
                  ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <!--<a href='<?php echo base_url();?>index.php/Admin/DownloadCSV' style='float: right'>Download</a>-->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>AuthorName</th>
                  <th>Abstract_ID</th>
                   <th>Email</th>
                    <th>Contact</th>
                  <th>University<br>/Organization</th>  
                   <th>Address</th>
                    <th>Country</th> 
                     <th>Trans.ID</th>
                      <th>Currency</th>
                      <th>TotalAmount</th>
                     
                   </tr>
                </thead>
                <tbody>

        <?php if (isset($parlist)) { ?>
        <?php 
        $i=1;
        foreach ($parlist as $si) { ?>
                <tr>
                  <td><?php echo $i; ?></td> 
                    <td><?php echo $si->cus_name; ?></td>
                    <td> <?php echo $si->value_a; ?></td>
                     <td><?php echo $si->cus_email; ?></td>
                     <td><?php echo $si->cus_phone; ?></td>
                   <td><?php echo $si->value_b; ?></td>
                    <td><?php echo $si->cus_add1; ?></td>
                    <td><?php echo $si->cus_country; ?></td>
                    <td><?php echo $si->tran_id; ?></td>
                    <td><?php echo $si->currency; ?></td>
                    <td><?php echo $si->total_amount; ?></td>
                  

        
                </tr>
             <?php $i++; }} ?>
                </tbody>
              
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
 
