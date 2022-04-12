<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ICWFM | 2021</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/favicon-16x16.png">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
  	.login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #800000;
    height: 280px;
}
.login-logo a, .register-logo a {
    color: #800000;
}
.btn-primary {
    background-color: #800000;
    border-color: #800000;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary active, .open>.dropdown-toggle.btn-primary{
    background-color: #800000;
    border-color: #800000;
}
  </style>
</head>
<body class="hold-transition login-page" style="background-color: #9C7E51;">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ICWFM</b> 2021</a>
   <!--  <?php  
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
//echo $ip_address;

echo gethostbyaddr($ip_address);




      ?> -->
  <!-- <?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
}
foreach ($query as $data) {
    echo $data . "<br>";
}
?> -->

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body table-responsive">
    <p class="login-box-msg" style="color: red; font-weight: bold;">
     <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
            $error_msg8= $this->session->flashdata('error_msg8');

                  if($success_msg){
                    
                       echo $success_msg;
                  
                  }else{
                  	echo $error_msg;

                  }
                if($error_msg8){
                  echo $error_msg8;
                   }
                  ?>

    </p>
<br>

    <form action="<?php echo base_url(); ?>index.php/Admin/Admin_login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">            
          </div>

            
              <input type="checkbox" checked="" name="remember"> Remember Me
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="glyphicon glyphicon-log-in"> Login</i></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<div>
	

</div>
    
    <!-- /.social-auth-links -->

    <a data-toggle="modal" data-target="#modal-default">I forgot my password</a><br>
    <!--<a href="<?php echo base_url();?>index.php/User/Register">Register a new account</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
 <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Recover Password</h4>
              </div>
               <form method="post" action="<?php echo base_url();?>index.php/User/forgetpass">
              <div class="modal-body">
                 
                   <div class="form-group">
                    <label for="productName" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <div class="form-group has-feedback">
        <input type="text" name="email" id="email" class="form-control" placeholder="Email" id="email" onblur="" required="">
        <span id="email_result"></span>
      
      </div>
      
                    </div>
                  </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Get Password</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.m
<!-- jQuery 3 -->
<script src="<?php  echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php  echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php  echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
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
                     url:"<?php echo base_url(); ?>index.php/User/check_email_avalibility2",  
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
<!--    <script type="text/javascript">-->
<!-- function forgetpass(){-->
<!-- $.ajax({-->
<!--  url: "<?php echo base_url() ?>index.php/User/forgetpass",-->
<!--  type: "POST",-->
<!--  data: $('#fp').serialize(),-->
<!-- dataType: 'json',-->
<!--  success: function(data){-->
<!-- if(data.status){-->
<!-- swal("Great !", "Password sent to your registed email", "success");-->
<!--  $('#modal-default').modal('hide'); -->
<!-- }-->

<!--  },-->
<!--  error: function(){-->
<!--   alert('Error Occurred..');-->
<!--  }-->
<!--});-->
<!--}-->
<!--</script>-->
</body>
</html>
