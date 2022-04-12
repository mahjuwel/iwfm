<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Staff
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>index.php/Home/<?php if(isset($muser)) echo $muser; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff</li>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/User/CreatedStaff" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="NAME" name="NAME" placeholder="Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">CARD#</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="AC_NO" name="AC_NO" required="" placeholder="CARD#">
                    </div>
                  </div>
                 
                    <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Designation</label>

                    <div class="col-sm-10">
                      <select class="form-control title" name="TITLE" style="width: 40%">
                  
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Department</label>

                    <div class="col-sm-10">
                      <select class="form-control DEPTNAME" name="DEPTNAME" style="width: 40%">
                      
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
               <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Section</label>

                    <div class="col-sm-10">
                      <select class="form-control SECTION" name="SECTION" style="width: 40%">
                      
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                   <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Sub-Section</label>

                    <div class="col-sm-10">
                      <select class="form-control SUB_SEC" name="SUB_SEC" style="width: 40%">
                       
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                      <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">UNIT</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="UNIT" style="width: 40%">
                       <option value="" selected>Choose</option>
                        <option value="FKL">FKL</option>
                        
                      </select>
<!--                       <input type="number" class="form-control" id="mobile" name="mobile" required="" placeholder="Phone Number">
 -->                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Phone Number</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="OPHONE" name="OPHONE" required="" placeholder="Phone Number">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Salary</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">
                    </div>
                  </div>

                 <!-- <div class="form-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" id="sellprice" name="sellprice" placeholder="Selling Price">
                <span class="input-group-addon">.00</span>
              </div> -->
            
         
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
                  <input type="text" class="form-control" id="datepicker" name="jdate" placeholder="Joining Date">
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
     

  </section>
</div>
 <script type="text/javascript">


      $('.title').select2({
        placeholder: '--- Select Designation---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/title',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.DEPTNAME').select2({
        placeholder: '--- Select Department---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/DEPTNAME',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.SECTION').select2({
        placeholder: '--- Select SECTION---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/SECTION',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>
<script type="text/javascript">


      $('.SUB_SEC').select2({
        placeholder: '--- Select Sub-Section---',
        ajax: {
          url: '<?php echo base_url();?>index.php/SecurityDep/SUB_SEC',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });


</script>






