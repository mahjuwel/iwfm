
<div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if($this->session->userdata('member_status')=='1'){
            echo 'Author';
        }else{
            echo 'Participent';
        }
        ?> Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php if($this->session->userdata('member_status')=='1'){
            echo 'Author';
        }else{
            echo 'Participent';
        }
        ?> profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
         
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?php echo base_url();?>images/ICWFM-2021-(LOGO).png" height='90' width='80' alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $pu[0]->membername; ?></h3>

              <p class="text-muted text-center">
                <?php if($this->session->userdata('member_status')=='1'){
            echo 'Author';
        }else{
            echo 'Participent';
        }
        ?></p>

             <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
              <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width:<?php if(($pu[0]->role)=='0'){
                          echo "100%";
                      }
                      if(($pu[0]->role)=='1'&&($pu[0]->docs)!=''){
                          echo "100%";
                      }
                      if(($pu[0]->role)=='1'&&($pu[0]->docs)==''){
                          echo "80%";
                      }
                      ?>" title="<?php if(($pu[0]->role)=='1'&&($pu[0]->docs)!=''){
                          echo "Profile fully Completed";
                      }
                      if(($pu[0]->role)=='0'){
                         echo "Profile fully Completed";
                      }
                      if(($pu[0]->role)=='1'&&($pu[0]->docs)==''){
                           echo "Profile Incomplete..";
                      }
                      ?>"></div>
                    </div>
              </li>
           
                
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong>About Me</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <p class="text-muted">
                Role: <?php if($pu[0]->role=='1'){
            echo 'Student';
        }else{
            echo 'Non-Student';
        }
        ?> </p>
        
         <p class="text-muted">
             Registration Date: <?php echo $pu[0]->regdate; ?>
         </p>
         
         <p class="text-muted">       
             University: <?php echo $pu[0]->university; ?></p>
        
         <p class="text-muted">     
             Country: <?php echo $pu[0]->countryname; ?>
         </p>         
             

              <hr>

               <h3 class="box-title"><strong><i class="fa fa-map-marker margin-r-5"></i>Location</strong></h3>

              <p class="text-muted"><?php echo $pu[0]->address; ?></p>

              <hr>

             

              <hr>

              <h3 class="box-title"> <strong><i class="fa fa-file-text-o margin-r-5"></i>Documents</strong></h3>
             <?php if(($pu[0]->role)=='0'){ ?>
             
            <?php } ?>
           <?php if(($pu[0]->role)=='1'&&($pu[0]->docs)!=''){ ?>
           <p><i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?><?php echo $pu[0]->docs; ?>">ID/StudentShip Letter</a></p>
              
               <?php }  ?>
              <?php 
                if($research[0]->docs!=''){ ?>
              <p>1st <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>books/<?php echo $research[0]->docs; ?>"><?php echo $research[0]->paperId; ?></a></p>
              <?php } ?>
              <?php 
             if($research[0]->docs2!=''){ ?>
              <p>2nd <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>books/<?php echo $research[0]->docs2; ?>"><?php echo $research[0]->paperId2; ?></a></p>
              <?php } ?>
              
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload ID/StudentShip Letter</h4>
              </div>
               <form  method="post" action="<?php echo base_url() ?>index.php/User/UploadStdoc" enctype="multipart/form-data"> 
              <div class="modal-body">
           

               <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file"  name="image">

                  <p class="help-block"></p>
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
       <div class="modal fade" id="finalsub">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
               <form  method="post" action="<?php echo base_url() ?>index.php/User/SendDoctoEmail"> 
              <div class="modal-body">
                  <h4 class="modal-title text-center">Final submission of your research paper</h4>
               <div class="form-group">
                   <?php 
                if($research[0]->docs!=''){ ?>
              <p>1st <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>books/<?php echo $research[0]->docs; ?>"><?php echo $research[0]->paperId; ?></a></p>
              
              <?php } ?>
              <?php 
             if($research[0]->docs2!=''){ ?>
              <p>2nd <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>books/<?php echo $research[0]->docs2; ?>"><?php echo $research[0]->paperId2; ?></a></p>
              <?php } ?>
                  <p class="help-block"></p>
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
                <form role="form" onsubmit="return Validate(this);" method="POST" action="<?php echo base_url() ?>index.php/User/Uploadbook" enctype="multipart/form-data">
              <div class="box-body">
                <?php if(($research2[0]->flc)==1){?>
                <span style="color: #800000; font-weight: bold;">If you want, you can upload only one file</span>
                <?php }?>
                
                   <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                  	echo $error_msg;

                  }
                
                  ?>
            
               <div class="form-group">
                    <p style="font-size:  16px; padding: 20px">Please select, from the following list,  the Theme and Sub-theme that best match with the Abstract you are submitting.</p>
                    <label for="tstock" class="col-sm-2 control-label">Themes</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="category" id="category" style="width: 75%;" required="">
                        <option selected value="">Select Theme</option>
                 
                  <?php foreach ($category as $category) { ?>                   
                  <option value="<?php echo $category->category;?>"><?php echo $category->category; ?></option>               
                  <?php }?>
                </select>
                    </div>
                    
                  </div> <br>    
                    <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Sub Theme</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" id="subcategory" name="subcategory" style="width: 75%;" required="">
                                            
                     </select>
                    </div>
                    <br>
                  </div>
                   <div class="form-group">
                    <label for="tstock" class="col-sm-2 control-label">Upload Your Abstract File</label>
                    <div class="col-sm-10">
                     <input type="file"  class="form-control" name="file" style="width: 75%;" required="">
                    </div>
                    <br>
                  </div>
               
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <div class="col-md-12 text-right">
                       <button type="submit" class="btn btn-primary" name="submit">Save</button>
                       <a data-toggle="modal" data-target="#finalsub" class="btn btn-primary">Final Submission</a>
                  </div>
            </div>
            
          
            
            
            <div class="box-footer">
                  <div class="col-md-12 text-right">
                      <p class="two-abs">"As a presenting author, you may submit a maximum of <strong>two Abstracts</strong>, do you want to submit another Abstract for ICWFM 2021?"
if Yes <input type="radio" name="role" id='role' class="minimal" value="1">, 
"Upload your second Abstract here":<br>
<a type="submit" class="btn btn-primary pull-right" style="display:none;" id="showfile" href="<?php echo base_url();?>index.php/User/Profile2"><i class="fa fa-arrow-right"></i>Submit 2nd Abstract</a><br><br>If No, do nothing.
</p>
                       
                  </div>
            </div>
            
              </div>
         
            </form>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  

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
.bg-green, .callout.callout-success, .label-success, .modal-success .modal-body {
    background-color: #800000!important;
    font-size: 15px;
    border-radius: 0px;
    border: 0px;
}
.alert-success{
        background-color: #00a65a!important
}
.two-abs{
    font-size: 15px;
}
.btn-primary {
    background-color: #800000;
    border-color: transparent;
    width: 164px;
    height: 41px;
    border-radius: 4px;
    padding: 9px;
    margin-bottom: 6px;
}
.form-control {
    border-radius: 4px;
    box-shadow: none;
    border-color: #d2d6de;
    margin-bottom: 10px;
}

@media(max-width: 768px){
    .btn-primary {
    background-color: #800000;
    border-color: transparent;
    width: 120px;
    font-size: 11px;
    height: 37px;
    border-radius: 4px;
    padding: 9px;
    margin-bottom: 6px;
}
}
</style>
<script>
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="1")
{
$("#showfile").show();
}
else
{
$("#showfile").hide();
}
});
});
</script>
<script>
$(document).ready(function(){


 $('#category').change(function(){
  var category = $('#category').val();
  if(category != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>index.php/User/fetch_subcategory",
    method:"POST",
    data:{category:category},
    dataType: "JSON",
    success:function(data)
    {
     $('#subcategory').html(data);
    }
   });
  }
  else
  {
   $('#category').html('<option value="">Select Subcategory</option>');
  }
 });
 
});

</script>
<script>
    var _validFileExtensions = [".docx", ".doc"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}
</script>
