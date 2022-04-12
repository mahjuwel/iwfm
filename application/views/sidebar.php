
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
          <a href="<?php echo base_url() ?>index.php/User/Profile3">
            <i class="fa fa-home"></i><span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li class="<?php if(isset($profile)) echo $profile; ?>"><a href="<?php echo base_url() ?>index.php/User/Profile3">Home</a></li>
        
          </ul>
        </li>


 <!--<li class="<?php if(isset($ac_menu32)) echo $ac_menu32;?><?php if(isset($ac_sl)) echo $ac_sl;?> treeview">-->
 <!--         <a href="#">-->
 <!--           <i class="fa fa-trello"></i><span>Author</span>-->
 <!--           <span class="pull-right-container">-->
 <!--             <i class="fa fa-angle-left pull-right"></i>-->
 <!--           </span>-->
 <!--         </a>-->
 <!--         <ul class="<?php if(isset($ac_sl)) echo $ac_sl;?> treeview-menu">-->
 <!--           <li class="<?php if(isset($ac_menusales)) echo $ac_menusales; ?>"><a href="<?php echo base_url() ?>index.php/SalePanel/Sales"><i class="fa fa-circle-o"></i>Author List</a></li>-->
           
           
 <!--         </ul>-->
 <!--       </li>  -->
         
        


    <li class="<?php if(isset($profupdate)) echo $profupdate ?><?php if(isset($ac_ul)) echo $ac_ul; ?><?php if(isset($ac_product)) echo $ac_product; ?><?php if(isset($ac_dl)) echo $ac_dl ?> <?php if(isset($ac_menu35)) echo $ac_menu35 ?><?php if(isset($ac_branch)) echo $ac_branch; ?><?php if(isset($ac_upp)) echo $ac_upp; ?><?php if(isset($change_password)) echo $change_password; ?><?php if(isset($ac_dwcrpermanager)) echo $ac_dwcrpermanager; ?><?php if(isset($ac_dwcr)) echo $ac_dwcr; ?> treeview">
              <a href="#">
                 <i class="fa fa-expeditedssl" aria-hidden="true"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 <li class="<?php if(isset($profupdate)) echo $profupdate; ?>"><a href="<?php echo base_url();?>index.php/User/profupdate"><i class="fa fa-circle-o"></i>ProfileUpdate</a></li> 
               
                <li class="<?php if(isset($change_password)) echo $change_password; ?>"><a href="<?php echo base_url() ?>index.php/User/change_password"><i class="fa fa-circle-o"></i> Change Password</a></li>
                <?php
               $previllage=$_SESSION['type'];      

               if($previllage<1){?>
                
                                  

              </ul>
               
              <?php } ?>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>