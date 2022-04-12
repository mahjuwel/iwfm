<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>ICWFM | 2021</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
   .btn-primary {
    background-color: #800000;
    border-color: #800000;
   }
   label{
       margin-left: -11px;
   }
   .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #fff;
    cursor: pointer;
    background-color: #800000!important;
    border: 0px!important;
}
   .nav-tabs>li>a {
    color: #000;
    cursor: pointer;
    padding: 13px 0px;
    height: 48px;
    font-size: 18px;
    background-color: #eee;
    border: 0px;
    border-radius: 0px;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    text-align: center;
    position: relative;
}
.form-control{
    border-radius: 4px;
    font-size: 16px;
}
.nav-tabs-custom{
    box-shadow: none;
}
.nav-tabs-custom>.tab-content {
    background: #fff;
    padding: 20px 0px;
    
}

.btn.btn-flat {
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-width: 1px;
    width: 120px;
    height: 42px;
}
.nav-tabs-custom>.nav-tabs>li{
    border-top: 0px;
}

.nav-tabs>li>a {
    color: #000;
    cursor: pointer;
    padding: 7px 0px;
    height: 42px;
}

.form-control:focus {
    border-color:  #800000;
    box-shadow: none;
}

a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #800000;
}
a{
   color: #800000;
}
.login-box-body, .register-box-body {
    border-radius: 4px;
}
.nav-tabs-custom>.nav-tabs>li.active>a, .nav-tabs-custom>.nav-tabs>li.active:hover>a {
    background-color: #fff;
    color: #fff;
}
   .nav-tabs-custom>.nav-tabs>li>a, .nav-tabs-custom>.nav-tabs>li>a:hover {
    background: transparent;
    margin: 0;
    width: 100px;
}
   @media(min-width: 1268px ){
   
   .login-box, .register-box {
    width: 456px;
    margin: 7% auto;
}
  .login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
    font-size: 16px;
}

}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary active, .open>.dropdown-toggle.btn-primary{
    background-color: #800000;
    border-color: #800000;
}
.skin-blue .main-header .logo:hover, .skin-blue .main-header .logo:focus, .skin-blue .main-header .logo:active, .skin-blue .main-header .logo active, .open>.dropdown-toggle.skin-blue .main-header .logo{
    background-color: #800000;
    border-color: #800000;
}
.login-box-msg, .register-box-msg {
    color: #000;
    font-size: 20px;
}
.nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: #800000;
}
.text-danger {
    color: #a94442;
    margin-left: 0px;
}

.text-success{
        margin-left: 0px;
}
.login-logo a, .register-logo a {
    color: #800000;
}
}
@media screen and (max-width: 767px){
.table-responsive {
    width: 100%;
    border: 0px;
}
}
  </style>
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
        <img src="/images/logo2.png"/ width="100%" height="60px">
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Create a New Profile</p>
<span>
    <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                  	echo $error_msg;

                  }
                
                  ?>
</span>
   
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings"  data-toggle="tab">Participant</a></li>
              <li ><a href="#activity" data-toggle="tab">Author</a></li>
            </ul>
            <div class="tab-content table-responsive">
              <div class="tab-pane" id="activity">
                  <a href="<?php echo base_url();?>index.php" class="text-center">I already have an account</a>
            <form method="post" style="margin-top: 30px" action="<?php echo base_url(); ?>index.php/User/RegisterCompleted" enctype="multipart/form-data">
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="membername" placeholder="Name as appears in the Abstract" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="email" id="email" class="form-control" placeholder="Email" id="email" onblur="" required="">
        <span id="email_result"></span>
        <input type="hidden" name="member_status" value='1'>
      </div>
      
      <!--<div class="form-group has-feedback">-->
      <!--  <input type="password" class="form-control" placeholder="Retype password">-->
      <!--  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>-->
      <!--</div>-->

        <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                      <input type="radio" name="role" class="minimal" value="0" checked>
                    <label style="margin-left: 5px">
            Non-Student
                </label>
             <input type="radio" name="role"  class="minimal" value="1">   <label style="margin-left: 5px">
           Student
                </label>

            </div>
        </div></br></br>
        <div class="form-group" style="display:none;" id="showfile">
                <span style="color:#800000">Please Upload Id/Studentship Letter</span>
                     <input type="file" class="form-control" name="docs" >
                    
            </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" name="university" placeholder="University/Organization" required="">
      <span class="glyphicon glyphicon-education form-control-feedback"></span>
      </div>
      <!--<div class="form-group has-feedback">-->
      <!--  <input type="text" class="form-control" name="name" placeholder="Phone">-->
      <!--<span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>-->
      <!--</div>-->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="address" placeholder="Contact Address" required="">
      <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
             <div class="form-group">
                   <label class="col-sm-4">Country</label>
                    <div class="col-sm-8">
                        <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="countryname" style="width:90%" required="">
                        <option value=""selected>Choose</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                 </div>
        </div><br><br>
        
        
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
     <input type="password" class="form-control" id="c_pass" placeholder="Confirm Password" required="" value="" onblur="confirmPass()"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div><br>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Create Account</button>
        </div>
        </form>
        <!-- /.col -->
      </div>
              </div>
      

            <div class="active tab-pane" id="settings">
                      
                <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                      <input type="radio" name="role" class="minimal" value="0" checked>
                    <label style="margin-left: 5px">
            Non-Student
                </label>
             <input type="radio" name="role"  class="minimal" value="1">   <label style="margin-left: 5px">
           Student
                </label>

            </div>
        </div></br></br>
        <div class="form-group" style="display:none;" id="showfile2">
            <form method="post" action="<?php echo base_url(); ?>index.php/User/ParticipentRegistered2" enctype="multipart/form-data">
                <span style="color:#800000">Please Upload Id/Studentship Letter</span>
                     <input type="file" class="form-control" name="docs" id="docs" required="">
                     
                <div class="form-group has-feedback">
        <input type="text" class="form-control" name="membername" placeholder="Name" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="email" id="participentEmail" class="form-control" placeholder="Email" onblur="" required="">
        <span id="email_result2"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="phone" class="form-control" placeholder="ContactNumber" required="">
        <input type="hidden" class="form-control" name="role" value="3">
    
      </div> 
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="university" placeholder="University/Organization" required="">
      <span class="glyphicon glyphicon-education form-control-feedback"></span>
      </div>
   
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="address" placeholder="Contact Address" required="">
      <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
             <div class="form-group">
                   <label class="col-sm-4">Country</label>
                    <div class="col-sm-8">
                        <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="countryname" style="width:90%" required="">
                        <option value=""selected>Choose</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                 </div>
        </div><br><br>
      
       <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    
        </div>          
    </form>    
        </div>
       

     
       
        
        
    
      
      <div class="row">
        
        <!-- /.col -->
        <form method="post" action="<?php echo base_url(); ?>index.php/User/RegisterCompletedParticipent">
        <div class="col-xs-12">
        <div class="form-group"  id="showfile3">
        <div class="form-group has-feedback">
        <input type="text" class="form-control" name="membername" placeholder="Name" required="">
        <input type="hidden" class="form-control" name="role" value="2">
        
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="email" id="participentEmail2" class="form-control" placeholder="Email" onblur="" required="">
        <span id="email_result3"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="phone" class="form-control" placeholder="ContactNumber" required="">
    
      </div> 
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="university" placeholder="University/Organization" required="">
      <span class="glyphicon glyphicon-education form-control-feedback"></span>
      </div>
   
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="address" placeholder="Contact Address" required="">
      <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="city" placeholder="City" required="">
      <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="postcode" placeholder="Postal Code" required="">
      <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
             <div class="form-group">
                   <label class="col-sm-4">Country</label>
                    <div class="col-sm-8">
                        <?php if(isset($cnt)){?>
                        
                      <select class="form-control" name="countryname" style="width:90%">
                        <option value=""selected>Choose</option>
                          <?php foreach($cnt as $si){?>
                        <option value="<?php echo $si->countryname; ?>"><?php echo $si->countryname; ?></option>
                        
                         <?php }?>
                      </select>
                      <?php }?>
                 </div>
        </div><br><br><br>
           <div class="form-group has-feedback">
        <input type="password" class="form-control" id="pass2" name="password" placeholder="Password" required="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
     <input type="password" class="form-control" id="c_pass2" placeholder="Confirm Password" required="" value="" onblur="confirmPass2()"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div><br>
      
        <div class="form-group">
       <input type="submit" class="btn btn-primary" value='Create Account'>
                    
        </div> 

        </div>
       
          
        </div>
        </form>
        <!-- /.col -->
      </div>
   

    
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          
          <!-- /.nav-tabs-custom -->
        </div>
    </form>

    <div class="social-auth-links text-center">
      <!--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using-->
      <!--  Facebook</a>-->
      <!--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using-->
      <!--  Google+</a>-->
    </div>

    <a href="<?php echo base_url();?>index.php" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<!-- FastClick -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<!-- page script -->


<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
 <script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/User/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                    $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  
  <script>  
 $(document).ready(function(){  
      $('#participentEmail').change(function(){  
           var participentEmail = $('#participentEmail').val();  
           if(participentEmail != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/User/check_email_avalibility3",  
                     method:"POST",  
                     data:{participentEmail:participentEmail},  
                     success:function(data){  
                    $('#email_result2').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script> 
   <script>  
 $(document).ready(function(){  
      $('#participentEmail2').change(function(){  
           var participentEmail = $('#participentEmail2').val();  
           if(participentEmail != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/User/check_email_avalibility3",  
                     method:"POST",  
                     data:{participentEmail:participentEmail},  
                     success:function(data){  
                    $('#email_result3').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script> 
 <script type="text/javascript">
    function confirmPass() {
        var pass = document.getElementById("pass").value
        var confPass = document.getElementById("c_pass").value
        if(pass != confPass) {
            alert('Password doesnot match!');
        }
    }
</script>
<script type="text/javascript">
    function confirmPass2() {
        var pass2 = document.getElementById("pass2").value
        var confPass2 = document.getElementById("c_pass2").value
        if(pass2 != confPass2) {
            alert('Password doesnot match!');
        }
    }
</script>
<!-- <script>-->
<!--$(document).ready(function(){-->
<!--$("input[type='select']").change(function(){-->
<!--if($(this).val()=="Bangladesh")-->
<!--{-->
<!--$("#currency").val('BDT');-->
<!--$("#total_amount").val('2000');-->

<!--}-->
<!--else-->
<!--{-->
<!--$("#currency").val('USD');-->
<!--$("#total_amount").val('100');-->
<!--}-->
<!--});-->
<!--});-->
<!--</script>-->
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
$("input[type='radio']").change(function(){
if($(this).val()=="1")
{
$("#showfile2").show();
}
else
{
$("#showfile2").hide();
}
});
});
</script>
<script>
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="0")
{
$("#showfile3").show();
}
else
{
$("#showfile3").hide();
}
});
});
</script>
<script>
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="1")
{
$("#showfile4").show();
}
else
{
$("#showfile4").hide();
}
});
});
</script>

<footer class="text-center" style="background-color: #D1CBCA; float:center">
       

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <button><a href='<?php echo base_url();?>index.php/Terms_Condition' target="_blank">Terms & Condition</a></button> 
        <button><a href='<?php echo base_url();?>index.php/Return_refund_policy' target="_blank">Return and refund policy</a></button> 
         <button><a href='<?php echo base_url();?>index.php/Privacy_Policy' target="_blank">Privacy Policy</a></button> 
         <button><a href='<?php echo base_url();?>index.php/About_Us' target="_blank">About Us</a></button> 
      </div>
      
    
    </div>

    <hr>
    
    
 <div class="row">
      <div class="col-md-12">
 <strong>Copyright &copy;<?php echo date('Y'); ?> <a href="#">BUET IWFM</a></strong> All Rights
    Reserved.
      </div>
      
    
  </div>
  <div class="row">
      <div class="col-md-12">
 <button style='float: right'><img src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-05.png" height='100' width='300'></button>
      </div>
      
    
  </div>
  </div>
  </footer>

</body>
</html>

