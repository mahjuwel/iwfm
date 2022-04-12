<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if(isset($ttl)) echo $ttl;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/default.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" /> -->
    <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/component.css" />
   
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <script type="text/javascript" language="javascript">

 function checkAvailability(){
 document.getElementById('myForm').submit();
 }
  function checkAvailability2(){
 document.getElementById('myForm').submit();
 }
  function checkAvailability3(){
 document.getElementById('myForm').submit();
 }
  function checkAvailability4(){
 document.getElementById('myForm').submit();
 }
 
 </script>
  <script type="text/javascript">

            function redirect1()
            {
                  window.location.assign("<?php echo base_url()?>index.php/Inventory/Product")
            }
        </script>
 <script type="text/javascript" language="javascript">
 function addProduct(){
 document.getElementById('myFormProduct').submit();
 redirect2();
 }
</script>
 <!-- <script type="text/javascript">

            function redirect2()
            {
                  window.location.assign("<?php echo base_url()?>index.php/Accounting/pos");
            }
        </script> -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style type="text/css">


 /* .skin-blue .sidebar-menu .treeview-menu>li>a {
    color: #EF0B8F;
}*/

.info-box {
    display: block;
    min-height: 90px;
    background: #3c8dbc;
    width: 98%;
    box-shadow: 0 5px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
    margin-left: 10px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 23px;
}
/*.skin-blue .main-header .navbar {
    background-color: #089c2f;
}*/

/*.skin-blue .main-header .logo {
    background-color: #9c980a;
    color: #fff;
    border-bottom: 0 solid transparent;
}*/
.skin-blue .main-header li.user-header {
    background-color: #a9780aad;
}
.navbar-nav>.user-menu>.dropdown-menu>.user-footer {
    background-color: #211f1f;
    padding: 10px;
}
bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 2px solid black;
    /* border-bottom: 2px solid #d09c0c; */
}
.table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
    border: 2px solid black;
}
.skin-blue .sidebar-menu>li.active>a {
    border-left-color: #38b90e;
}

.md-content button {
    display: block;
    margin: 0 auto;
    font-size: 1.2em;
    background-color: orange;
    border-color: #5a513f;
}
    margin-top: 15px;
    margin-bottom: 12px;
}

.btn-app {
    border-radius: 3px;
    position: relative;
    padding: 15px 5px;
    margin: 0 0 10px 10px;
    min-width: 122px;
    height: 90px;
    text-align: center;
    color: #666;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
    font-size: 13px;
}
.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 10px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 2px;
    line-height: 1.428571;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.page-header {
    padding-bottom: 0px;
    margin: -11px 0px 1px;
    border-bottom: 1px solid #eee;
}
table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 2px;
    line-height: 1.428571;
    vertical-align: top;
    border-top: 2px solid #333;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 2px solid #333;
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 103px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    //padding: 1px;
    //line-height: 0.828571;
    //vertical-align: top;
  border-top: 2px solid #333;
}
a {
    color: #1a1a1b;
}
@media print {
       a[href]:after {
          display: none;
          visibility: hidden;
       }
    }
    .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 2px 2px;
  }
  .skin-blue .main-header .navbar {
    background-color: #050505;
}
.skin-blue .main-header .logo {
    background-color: #050505;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #050505 !important;
}
.callout.callout-info {
    border-color: #050505;
}
.btn-success {
    background-color: #050505;
    border-color: #050505;

}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success active, .open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: #050505;
    border-color: #050505; /*set the color you want here*/
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary active, .open>.dropdown-toggle.btn-primary{
    background-color: #800000;
    border-color: #800000;
}
.skin-blue .main-header .logo:hover, .skin-blue .main-header .logo:focus, .skin-blue .main-header .logo:active, .skin-blue .main-header .logo active, .open>.dropdown-toggle.skin-blue .main-header .logo{
    background-color: #050505;
    border-color: #050505;
}
.skin-blue .main-header .navbar .sidebar-toggle:hover, .skin-blue .main-header .navbar .sidebar-toggle:focus, .skin-blue .main-header .navbar .sidebar-toggle:active, .skin-blue .main-header .navbar .sidebar-toggle active, .open>.dropdown-toggle.skin-blue .main-header .navbar .sidebar-toggle{
    background-color: #050505;
    border-color: #050505;
}

.btn-primary {
    background-color: #050505;
    border-color: #050505;
}
.user-panel {
    position: relative;
    width: 100%;
    padding: 22px;
    overflow: hidden;
}
.profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 0px;
    border: 0px solid #d2d6de;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #4a6ee0;
    border: 1px solid #4a6ee0;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}
</style>
<!-- Select2 CSS -->
<link rel="stylesheet" type="text/css" href="select2/dist/css/select2.min.css">

<!-- jQuery -->
<!-- <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
 -->
<!-- Select2 JS -->

 <?php if (isset($ac_hover)) echo $ac_hover; ?>

</head>
<body class="<?php if(isset($colapse)) echo $colapse; ?><?php if(isset($uncolapse)) echo $uncolapse; ?>">
<div class="wrapper">

  <header class="main-header" style="background-color: #050505">

    <!-- Logo -->
    <a href="<?php echo base_url() ?>index.php/User/profile" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ICWFM </b>2021</span>
    </a>
 
    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       <li><a href="#" class="clock"><?php echo date('Y-m-d'); ?></a></li>
          <!--<li><a href="<?php echo base_url() ?>index.php/Accounting/pos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="POS"><i class="fa fa fa-barcode"></i></a></li>-->
                    <!--<li><a href="<?php echo base_url() ?>index.php/Inventory/Product" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Inventory"><i class="fa fa-th"></i></a></li>-->
                    <!--<li><a href="<?php echo base_url() ?>index.php/Accounting/AccountOperation" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Accounting"><i class="fa fa-calculator"></i></a></li>-->

          <!-- Messages: style can be found in dropdown.less-->
          <!--  <li><a href="https://spos.tecdiary.com/pos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Sell GiftCard"><i class="fa fa-credit-card"></i></a></li>

            <li><a href="https://spos.tecdiary.com/pos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">Register Details</a></li>
                <li><a href="https://spos.tecdiary.com/pos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">Today Sale</a></li>
                    <li><a href="https://spos.tecdiary.com/pos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">Close Register</a></li> -->
          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">
           <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
           <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>images/ICWFM-2021-(LOGO).png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $membername=$this->session->userdata('membername');
  ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               
                 <img src="<?php echo base_url();?>images/ICWFM-2021-(LOGO).png" class="" alt="User Image">
     
  
                

              </li>
            <?php if($this->session->userdata('user_id')==''){
              redirect('Login/user_logout');
            } ?>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>index.php/Login/user_logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
          
        </ul>
      </div>

    </nav>
  </header>
