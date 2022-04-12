
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>images/ICWFM-2021-(LOGO).png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $membername=$this->session->userdata('membername');
  ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
          <?php if(isset($ac_menu)) echo $ac_menu ?>

        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->


      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="<?php if(isset($profile)) echo $profile ?> treeview">
          <a href="<?php echo base_url() ?>index.php/Admin/Home">
            <i class="fa fa-home"></i><span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li class="<?php if(isset($profile)) echo $profile; ?>"><a href="<?php echo base_url() ?>index.php/Admin/Home">Home</a></li>
        
          </ul>
        </li>


 <li class="<?php if(isset($AuthorStudentList)) echo $AuthorStudentList;?><?php if(isset($NonStudentAuthorPayment)) echo $NonStudentAuthorPayment;?><?php if(isset($AuthorList)) echo $AuthorList;?><?php if(isset($member)) echo $member;?><?php if(isset($abs_subm)) echo $abs_subm;?><?php if(isset($abs_subm2)) echo $abs_subm2;?><?php if(isset($abs_save)) echo $abs_save;?><?php if(isset($abs_save2)) echo $abs_save2;?> treeview">
          <a href="#">
            <i class="fa fa-trello"></i><span>Author</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($AuthorList)) echo $AuthorList; ?>"><a href="<?php echo base_url() ?>index.php/Admin/AuthorList"><i class="fa fa-circle-o"></i>Author Abstract List</a></li>
             <li class="<?php if(isset($abs_subm)) echo $abs_subm;?>"><a href="<?php echo base_url() ?>index.php/Admin/AbstractSubmitted"><i class="fa fa-circle-o"></i>1stAbstractSubmitted</a></li>
           <li class="<?php if(isset($abs_subm2)) echo $abs_subm2;?>"><a href="<?php echo base_url() ?>index.php/Admin/SecondAbstractSubmitted"><i class="fa fa-circle-o"></i>2ndAbstractSubmitted</a></li>
             <li class="<?php if(isset($abs_save)) echo $abs_save;?>"><a href="<?php echo base_url() ?>index.php/Admin/AbstractSave"><i class="fa fa-circle-o"></i>1stAbstractSaved</a></li>
          <li class="<?php if(isset($abs_save2)) echo $abs_save2;?>"><a href="<?php echo base_url() ?>index.php/Admin/SecondAbstractSave"><i class="fa fa-circle-o"></i>2ndAbstractSaved</a></li>
         <!--<li class="<?php if(isset($member)) echo $member;?>"><a href="<?php echo base_url() ?>index.php/Admin/MemberNotSaveSubmit"><i class="fa fa-circle-o"></i>AbsNotSaveSubmit</a></li>-->
       <li class="<?php if(isset($NonStudentAuthorPayment)) echo $NonStudentAuthorPayment;?>"><a href="<?php echo base_url() ?>index.php/Admin/NonStudentAuthorPayment"><i class="fa fa-circle-o"></i>NSAuthorPayment</a></li>
     <li class="<?php if(isset($AuthorStudentList)) echo $AuthorStudentList;?>"><a href="<?php echo base_url() ?>index.php/Admin/AuthorStudentList"><i class="fa fa-circle-o"></i>AuthorStudentList</a></li>

          </ul>
        </li>  
         
     <li class="<?php if(isset($StudentList)) echo $StudentList;?><?php if(isset($NonStudentList)) echo $NonStudentList;?> treeview">
          <a href="#">
            <i class="fa fa-trello"></i><span>Participents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($StudentList)) echo $StudentList; ?>"><a href="<?php echo base_url() ?>index.php/Admin/StudentList"><i class="fa fa-circle-o"></i>Students List</a></li>
             <li class="<?php if(isset($NonStudentList)) echo $NonStudentList;?>"><a href="<?php echo base_url() ?>index.php/Admin/NonStudentList"><i class="fa fa-circle-o"></i>Non-Students List</a></li>

          </ul>
        </li>  


    <li class="<?php if(isset($BrowserShutDownPayment)) echo $BrowserShutDownPayment;?><?php if(isset($ac_ul)) echo $ac_ul; ?><?php if(isset($ac_product)) echo $ac_product; ?><?php if(isset($ac_dl)) echo $ac_dl ?> <?php if(isset($ac_menu35)) echo $ac_menu35 ?><?php if(isset($ac_branch)) echo $ac_branch; ?><?php if(isset($ac_upp)) echo $ac_upp; ?><?php if(isset($change_password)) echo $change_password; ?><?php if(isset($ac_dwcrpermanager)) echo $ac_dwcrpermanager; ?><?php if(isset($ac_dwcr)) echo $ac_dwcr; ?> treeview">
              <a href="#">
                 <i class="fa fa-expeditedssl" aria-hidden="true"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 <!--<li class="<?php if(isset($ac_upp)) echo $ac_upp; ?>"><a href="#"><i class="fa fa-circle-o"></i>ProfileUpdate</a></li> -->
               
                <li class="<?php if(isset($change_password)) echo $change_password; ?>"><a href="<?php echo base_url() ?>index.php/Admin/change_password"><i class="fa fa-circle-o"></i> Change Password</a></li>
                <?php
               $previllage=$_SESSION['type'];      

               if($previllage<1){?>
                
                <li class="<?php if(isset($BrowserShutDownPayment)) echo $BrowserShutDownPayment;?>"><a href="<?php echo base_url() ?>index.php/Admin/BrowserShutDownPayment"><i class="fa fa-circle-o"></i>BrowserShutDownPayment</a></li>
              

              </ul>
               
              <?php } ?>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>