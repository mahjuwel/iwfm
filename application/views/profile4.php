
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
         
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <!-- Profile Image -->
          <div class="box box-primary" >
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?php echo base_url();?>images/ICWFM-2021-(LOGO).png" height='10' width='80' alt="User profile picture">

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
            <div class="box-body box-profile">
                <h3 class="box-title text-center" style="margin-top: -10px"> <strong><i class="fa fa-file-text-o margin-r-5"></i>Documents</strong></h3>
             
           <?php if(($pu[0]->role)=='1'&&($pu[0]->docs)!=''){ ?>
           <p class="text-center"><i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?><?php echo $pu[0]->docs; ?>">ID/StudentShip Letter</a></p>
              
               <?php }  ?>
              <?php if(($pu[0]->role)=='1'&&($pu[0]->docs)!=''){ ?>
           <p class="text-center"><i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?><?php echo $pu[0]->docs; ?>">ID/StudentShip Letter</a></p>
              
               <?php }  ?>
              <?php 
                if($audoc[0]->prof_id!=''){ ?>
              <p class="text-center">1st <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>index.php/User/AuthorDocs"><?php echo $audoc[0]->prof_id; ?></a></p>
              <?php } ?>
               <?php 
                if($audoc2[0]->prof_id!=''){ ?>
              <p class="text-center">2nd <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>index.php/User/AuthorDocs2"><?php echo $audoc2[0]->prof_id; ?></a></p>
              <?php } ?>
             </div>
          </div>
          <!-- /.box -->
          
          
          
                </div>
                
          

          
        <div class="col-md-6">
          <!-- About Me Box -->
          <div class="box box-primary" style="padding-left: 20px; padding-right: 20px">
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

          
            
             
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
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
     
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
                <form role="form" onsubmit="return Validate(this);" method="POST" action="<?php echo base_url() ?>index.php/User/createAuthdocs2">
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
                  <script type="text/javascript">

jQuery(document).ready(function($){

$('.my-form .add-box').click(function(){

var n = $('.text-box').length + 1;

if( 10 < n ) {

alert('Stop it!');

return false;

}

var box_html = $('<p class="text-box"><label></label><input type="text" name="authfname' + n + '" placeholder="1st Name" value="" id="box' + n + '" required="" /><input type="text" name="authmname' + n + '" placeholder="Middle Name" value="" id="box' + n + '"/><input type="text" name="authlname' + n + '" placeholder="Last Name" value="" id="box' + n + '"/><input type="text" style="width: 82%;margin-top: 8px;margin-right: 16px" name="affiliation' + n + '" placeholder="Affiliation. Email" value="" id="box' + n + '" required=""/><a href="#" class="remove-box"><img src="<?php echo base_url();?>addicon/delete.png" style="height:25px; width:20px;"></a></p>');

box_html.hide();

$('.my-form p.text-box:last').after(box_html);

box_html.fadeIn('slow');

return false;

});

$('.my-form').on('click', '.remove-box', function(){

// $(this).parent().css( 'background-color', '#FFFFFF' );

$(this).parent().fadeOut("slow", function() {

$(this).remove();

$('.box-number').each(function(index){

$(this).text( index + 1 );

});

});

return false;

});

});

</script>

                <div class="form-group">
                    <label for="productName" class="col-sm-12 control-label">1st Author</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="firstauthfname" name="firstauthfname" required="" placeholder="First Name">
                      
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="firstauthmname" name="firstauthmname" placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="firstauthlname" name="firstauthlname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="firstauthemail" name="firstauthemail" required="" placeholder="Email Address">
                      
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="firstauthcontactno" name="firstauthcontactno" required="" placeholder="Contact Number">
                      
                    </div>
                    
                    
                    
                  </div>
                    <div class="form-group">
                    
                   
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="firstauthaffiliation" name="firstauthaffiliation" required="" placeholder="Affiliation">
                    </div>
                    <div class="col-sm-6">
                       <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="firstauthcountryname" style="width:90%" required="">
                        <option value=""selected>Country of residence</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                    </div>
                    
                    
                  </div>
              
                <div class="form-group">
                    <label for="productName" class="col-sm-12 control-label">Corresponding Author: Same as 1st Author<input type="checkbox" class="minimal" name="corr_sameas1stauthor" onclick="FillBilling(this.form)" value="1"></br>(All communication would be made with corresponding author)</label>
                        

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="corauthfname" name="corauthfname" required="" placeholder="First Name">
                      
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="corauthmname" name="corauthmname"  placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="corauthlname" name="corauthlname"  placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="corauthemail" name="corauthemail" required="" placeholder="Email Address">
                      
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="corauthcontactno" name="corauthcontactno" required="" placeholder="Contact Number" required="">
                      
                    </div>
                    
                    
                    
                  </div>
                    <div class="form-group">
                    
                   
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="corauthaffiliation" name="corauthaffiliation" required="" placeholder="Affiliation">
                    </div>
                    <div class="col-sm-6">
                       <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="corauthcountryname" style="width:90%" required="">
                        <option value=""selected>Country of residence</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                    </div>
                    
                    
                  </div>
                 
                   <div class="form-group">
                    <label for="productName" class="col-sm-12 control-label">Presenting Author: Same as 1st Author<input type="checkbox" class="minimal" name="pres_sameas1stauthor" onclick="FillBilling2(this.form)" value="1"></br>
                    (Presenting author would be presenting the work in the conference
                    )
                    
                    </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="preauthfname" name="preauthfname" required="" placeholder="First Name">
                      
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="preauthmname" name="preauthmname" placeholder="Middle Name">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="preauthlname" name="preauthlname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="preauthemail" name="preauthemail" required="" placeholder="Email Address">
                      
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="preauthcontactno" name="preauthcontactno" required="" placeholder="Contact Number">
                     
                      
                    </div>
                    
                    
                    
                  </div>
                    <div class="form-group">
                    
                   
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="preauthaffiliation" name="preauthaffiliation" required="" placeholder="Affiliation">
                    </div>
                    <div class="col-sm-6">
                       <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="preauthcountryname" style="width:90%" required="">
                        <option value=""selected>Country of residence</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                    </div>
                    
                    
                  </div>
<div class="form-group"> 
<div class="col-sm-12">
     <div class="row" id="div1">

<div class="my-form">

<p class="text-box">
    <label style="margin-left: -10px;" for="sellprice" class="col-sm-12 control-label">Author List (the sequence which appears in the abstract)
<a class="add-box" href="#"><img src="<?php echo base_url();?>addicon/sq_plus.png" style="height:25px; width:20px;"></a><br />
   <!--<a class="add-box" href="#"><img src="<?php echo base_url();?>addicon/sq_plus.png" style="height:25px; width:20px;"></a><br />-->
    </label>
              
             

<!--<b>1 </b>-->


<input type="text" name="authfname_box1" placeholder="First Name" required=""/>
<input type="text" name="authmname_box1" placeholder="Middle Name" />
<input type="text" name="authlname_box1" placeholder="Last Name" />
<input type="text" style="width: 82%;margin-top: 8px;margin-right: 16px" name="affiliation_box1" placeholder="Affiliation, Email" required=""/>

<!--<a class="add-box" href="#"><img src="<?php echo base_url();?>addicon/sq_plus.png" style="height:25px; width:20px;"></a><br />-->
</div>
 </div>
 </div>
 </div>
                  <div class="form-group">
                    <label for="sellprice" class="col-sm-2 control-label">Title of the Abstract</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="titleofabstract" name="titleofabstract" required="" placeholder="Title of the Abstract All CAPITAL LETTER">
                    </div>
                  </div>
               <div class="form-group" style="margin-top: 10px">
                  
                    <label for="tstock" class="col-sm-12 control-label">Choose a theme from the list</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="category" id="category" style="width: 75%;" required="">
                        <option selected value="">Choose</option>
                 
                  <?php foreach ($category as $category) { ?>                   
                  <option value="<?php echo $category->category;?>"><?php echo $category->category; ?></option>               
                  <?php }?>
                </select>
                    </div>
                    
                  </div> <br>    
                    <div class="form-group" style="position: relative;
    top: 10px;">
                    <label for="tstock" class="col-sm-12 control-label">Choose a sub-theme from the list</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" id="subcategory" name="subcategory" style="width: 75%;" required="">
                                            
                     </select>
                    </div>
                    <br>
                  </div>
                   <div class="form-group" style="position: relative; top: 20px">
                      <label for="tstock" class="col-sm-12 control-label">Abstract: (Once submitted you will not be able to further modify your work)</label>
                    <div class="col-sm-12">
                         <textarea class="form-control" id="abstractword" name="abstractword" placeholder="Abstract 300 words limit" style="height: 230px" onkeyup="contar()" onkeypress="contar()" required=""></textarea>
                         </br>
                        <p style="margin-top: -20px">
                        Total words count: <span id="display_count" style="font-weight: bold">0</span> <span id="display" style="font-weight: bold"></span>
                        <!--Words left: <span id="word_left" style="font-weight: bold">300</span>-->
                        </p>
                        <p style="font-size: 14px;">Note: You can not paste more than 300 words, the extra words will be autometically deleted by the system</p>
                    </div>
                    
                    
                  </div>
               <div class="form-group" style="padding: 18px">
                <label style=" margin-top: 20px; margin-left: 4px">Five Keywords</label>
                <input type="text" class="form-control" id="fivekeywords" name="fivekeywords" required="" placeholder="Five Keywords separated by comma">
                 <input type='hidden' class="form-control" name="display_count2" id="display_count2">
             
              </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <div class="col-md-12 text-right">
                       <p>Note: Please save your paper by clicking<strong>"save" button</strong>  before your final submission</p>
                       
                       <button type="submit" class="btn btn-primary" id="myBtn">Save</button>
                       <?php if($audoc2[0]->titleofabstract!=''){ ?>
                       <h6 data-toggle="modal" style="background: #000" data-target="#finalsub" class="btn btn-primary" id="myBtn2">Final Submission</h6>
                       <?php } ?>
                  </div>
            </div>
               
          
            
            
             <div class="box-footer">
                   <div class="row">
                        
                      <div class="col-md-12">
                          
                           <a type="submit" class="btn btn-primary pull-right" href="<?php echo base_url();?>index.php/User/Profile3"><i class="fa fa-arrow-left"></i>Back</a>
                      </div>
                      
                   
                      
                  </div>
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
         <div class="modal fade" id="finalsub">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
           <form  method="post" action="<?php echo base_url() ?>index.php/User/SendDoctoEmailAbstract"> 
              <div class="modal-body">
                  <h4 class="modal-title text-center">Final submission of your Abstract</h4><br>
                  <!--<p style="margin-top: -20px; text-align: center; color: red">Please save your file by clicking SAVE button before your final submission. Either the file will fail to submit.</p>-->
               <div class="form-group text-center">
                  <?php 
                if($audoc[0]->prof_id!=''){ ?>
              <p>1st <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>index.php/User/AuthorDocs"><?php echo $audoc[0]->prof_id; ?></a></p>
              <?php } ?>
                 <?php 
                if($audoc2[0]->prof_id!=''){ ?>
              <p>2nd <i class="fa fa-fw fa-file-code-o"></i><a href="<?php echo base_url();?>index.php/User/AuthorDocs2"><?php echo $audoc2[0]->prof_id; ?></a></p>
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
.profile-username {
    font-size: 21px;
    margin-top: 5px;
    font-weight: bold;
}
.profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 0px;
    border: 0px solid #d2d6de;
    height: 115px;
}
span.box-number {
    display: none;
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
    font-size: 18px;
}
input#titleofabstract {
    text-transform: uppercase;
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
.list-group {
    padding-left: 0;
    margin-bottom: 0px;
}
.progress {
    height: 20px;
    margin-bottom: 0px;
    }
    input[type=checkbox], input[type=radio] {
    position: relative;
    line-height: normal;
    top: 2px!important;
    left: 6px!important;
    
}
button, input, select, textarea {
    border-radius: 3px;
    border-color: #000;
    margin-left: 6px;
}
.text-box{
 margin-left: 20px;   
}
button, select, textarea {
    border-radius: 3px;
    width: 20%;
    border: 1px solid #000;
    padding: 5px;
    margin: 4px;
}
.label{
    margin-left: 4px;
}
.text-muted {
    color: #000;
    font-size: 18px;
}
.m-10 {
    margin-left: -6px;
}
.red{
    color: red!important;
}

.green{
    color: green;
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
button, input, select, textarea {
    border-radius: 3px;
    width: 100%;
    border: 1px solid #000;
    padding: 5px;
}
}
</style>

<script>
//   function contar(){
//   if($.trim($('[name="abstractword"]').val()).split(' ').filter(function(v){return v!==''}).length>300){
//           alert('You have crossed 300 words. Please limit 300 words');
        
//       }
// }

$(document).ready(function() {
    $("#abstractword").on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 300) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 1000).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
          $('#display_count').text(words);
          document.getElementById("myBtn").disabled = true;
         $('#display').text('You have crossed 300 words').css("color", "#a52a2a");
         $('[name="display_count2"]').val(words);
          $("h6").hide() = true;
        }
        else {
            $('#display_count').text(words);
            $('[name="display_count2"]').val(words);
            $('#word_left').text(300-words);
             document.getElementById("myBtn").disabled = false;
            $('#display').text('Thanks! Your word limitation is OK').css("color", "#00cf4e");
             $("h6").show() = false;
        }
    });
 }); 
 
</script>

<script type="text/javascript">
	function FillBilling(f) {
  if(f.corr_sameas1stauthor.checked == true) {
   f.corauthfname.value = f.firstauthfname.value;
    f.corauthmname.value = f.firstauthmname.value;
    f.corauthlname.value = f.firstauthlname.value;
    f.corauthemail.value = f.firstauthemail.value;
    f.corauthcontactno.value = f.firstauthcontactno.value;
    f.corauthaffiliation.value = f.firstauthaffiliation.value;
    f.corauthcountryname.value = f.firstauthcountryname.value;
  }
}
</script>
<script type="text/javascript">
	function FillBilling2(f) {
  if(f.pres_sameas1stauthor.checked == true) {
   f.preauthfname.value = f.firstauthfname.value;
    f.preauthmname.value = f.firstauthmname.value;
    f.preauthlname.value = f.firstauthlname.value;
    f.preauthemail.value = f.firstauthemail.value;
    f.preauthcontactno.value = f.firstauthcontactno.value;
    f.preauthaffiliation.value = f.firstauthaffiliation.value;
    f.preauthcountryname.value = f.firstauthcountryname.value;
  }
}
</script>
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
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

  })
</script>

