<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Password</li>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/User/PasswordChanged">
                 
                 <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="Password" name="password" required="" placeholder="New Password" style="width: 50%;">
                    </div>
                  </div>
               
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Change</button>
                      <br><br>
                    </div>
                  </div>
                </form>
              </div>
          </div>
      </div>
      <br>
   
        <!-- /.modal -->


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
.btn-success {
  background-color: #800000;
    border-color: transparent;
    width: 164px;
    height: 41px;
    border-radius: 4px;
    padding: 9px;
    margin-bottom: 6px;
}
</style>
 