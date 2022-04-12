<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create User Role
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> User Role</li>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/User/createdRole">
                 
                  <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Employee</label>
                    <div class="col-sm-5">
                         <select class="username form-control" style="width:250px" name="user_id" id="user_id"></select>
                    </div>
                    <div class="col-sm-5">                  
              
                  </div>
                </div>
                  <div class="form-group">
                    <label for="product_code" class="col-sm-2 control-label">Roles</label>

                    <div class="col-sm-5">
                    	<select name="type" class="form-control">
                    		<option value="">Choose</option>
                    		 <option value="0">SuperAdmin</option>
                    		<option value="1">BranchManager</option>
                    	
                    		
                    	</select>
                    </div>
                    	 <div class="col-sm-5">                  
              
                  </div>
                   
                  </div>
              
            
                   <div class="form-group">
                    <label for="buyprice" class="col-sm-2 control-label">Select Active</label>

                    <div class="col-sm-10">
                  <input type="checkbox" class="flat-red" name="active" value="1" checked>

                    </div>
                  </div>
                   <div class="form-group">
                    <label for="buyprice" class="col-sm-2 control-label">Select Incharge</label>

                    <div class="col-sm-10">
                  <input type="checkbox" class="flat-red" name="head" value="1" checked>

                    </div>
                  </div>
                  
                <br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <br><br>
                    </div>
                  </div>
                </form>
              </div>
          </div>
          </div>
      </div>
      <br>
   
        <!-- /.modal -->


  </section>
</div>
 