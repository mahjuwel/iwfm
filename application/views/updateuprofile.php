<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Update Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Update</li>
      </ol>
    
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
          	 <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                  	echo $error_msg;

                  }
                
                  ?>
            <br>
           <div class="tab-pane active" id="settings">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/User/prfupdated">
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Name as appears in abstract</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="membername" name="membername" value="<?php echo $pu[0]->membername; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $pu[0]->email; ?>" readonly="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">ID</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $pu[0]->user_id; ?>" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pstock" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php if($pu[0]->role==1){
                          echo 'Student';}else{
                              echo 'Non-student';
                          }
                          ?>" readonly="">
                    </div>
                  </div>
                   
               
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Contact Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo $pu[0]->address; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">University/Organization</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="university" name="university" value="<?php echo $pu[0]->university; ?>">
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
     

      

  </section>
</div>

<style>
   .box-header .box-title{
    font-size: 24px;
    font-weight: 700;
    }
    .box.box-primary {
    border-top-color: #800000;
}
.progress-bar-green, .progress-bar-success {
    background-color: #800000;
}
.skin-blue .main-header .navbar {
    background-color: #800000;
}
.skin-blue .main-header .logo {
    background-color: #800000;
}
.content-wrapper {
    min-height: 100%;
    background-color: #f4f4f4;
    z-index: 800;
}
.skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {
    color: #fff;
}
</style>
 