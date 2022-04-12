<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> User</li>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/User/Created" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">UserName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" required="" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">FullName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fullname" name="fullname" required="" placeholder="FullName">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">ID</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="user_id" name="user_id" required="" placeholder="ID">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pstock" class="col-sm-2 control-label">Designation</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="designation" name="designation" required="" placeholder="Designation">
                    </div>
                  </div>
                   
               <div class="form-group">
                    <label for="style" class="col-sm-2 control-label">Branch</label>

                    <div class="col-sm-10">
                   <select class="form-control select2" name="branch" style="width: 40%;" required="">
                        <option selected value="">Select Branch</option>
                  <?php if(isset($brn)){ ?>
                  <?php foreach ($brn as $brn) { ?>                   
                  <option value="<?php echo $brn->branch; ?>"><?php echo $brn->branch; ?></option>               
                <?php }} ?>
                </select>
                    
                    </div>
                </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Phone Number</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="buyprice" class="col-sm-2 control-label">Email Add</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" required="" name="email" placeholder="Email Add">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="buyprice" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" required="" name="password" placeholder="Password">
                    </div>
                  </div>

                 <!-- <div class="form-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" id="sellprice" name="sellprice" placeholder="Selling Price">
                <span class="input-group-addon">.00</span>
              </div> -->
            
                 
                <div class="form-group">
                    <label for="note" class="col-sm-2 control-label">Home Address</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="presentaddress2" name="presentaddress2" placeholder="Home Address"></textarea>
                    </div>
                  </div>
               <!--    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div> -->
                  
                    <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Job Starting Date</label>

                    <div class="col-sm-10">
                  <input type="text" class="form-control" id="datepicker" required="" name="joiningDate" placeholder="Joining Date">
                    </div>
                  </div>
                                  
                  <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Salary</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="salary" name="salary" required="" placeholder="Salary">
                    </div>
                  </div>
                                  
                    <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Dath of Birth</label>

                    <div class="col-sm-10">
                  <input type="text" class="form-control" id="datepicker2" required="" name="dob" placeholder="Dath of Birth">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="note" class="col-sm-2 control-label">Note</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="note" name="note" placeholder="Note"></textarea>
                    </div>
                  </div>
                
                <div class="form-group">

                    <label for="photo" class="col-sm-2 control-label">Photo</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="image" name="image" placeholder="Photo">
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
      <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Category</h4>
              </div>
        <form action="Category_add" method="post" class="form-horizontal">
              <div class="modal-body">
                 <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" name="category" required="" placeholder="Category">
                    </div>
                    <br>
                  </div>                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-outline">Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      

  </section>
</div>
 