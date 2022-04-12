<style type="text/css">
  .btn-app {
    border-radius: 3px;
    position: relative;
    padding: 15px 5px;
    margin: 0 0 10px 10px;
    min-width: 122px;
    height: 80px;
    text-align: center;
    color: #666;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
    font-size: 13px;
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 82px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span style="font-weight: bold; color: blue;"></span>
          
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
    <a href="<?php echo base_url(); ?>index.php/Admin/AbstractSubmitted">
 <span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>
 
            <div class="info-box-content">
              <h6>SUBMITTED</h6>
              
              <span class="info-box-text">1st Abstract: <?php if (isset($alistc)) echo $alistc[0]->mem; ?></span>
             

            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         

        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            
        <a href="<?php echo base_url(); ?>index.php/Admin/SecondAbstractSubmitted"><span class="info-box-icon bg-green"><i class="fa fa-file"></i></span></a>

            <div class="info-box-content">
             <h6>SUBMITTED</h6>
              <span class="info-box-text">2ND ABSTRACT: <?php if (isset($alistc2)) echo $alistc2[0]->mem2; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
       

        <!-- /.col -->
      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="<?php echo base_url(); ?>index.php/Admin/AbstractSave"><span class="info-box-icon bg-yellow"><i class="fa fa-file"></i></span></a>

            <div class="info-box-content">
               <h6>SAVED</h6>
             <span class="info-box-text">IST ABSTRACT: <?php if(isset($alists)) echo $alists[0]->save; ?></span>
             
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     

      
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">  
   <a href="<?php echo base_url(); ?>index.php/Admin/SecondAbstractSave"><span class="info-box-icon bg-red"><i class="fa fa-file"></i></span></a>
            <div class="info-box-content">
                <h6>SAVED</h6>
              <span class="info-box-text">2ND ABSTRACT: <?php if(isset($alists2)) echo $alists2[0]->save2; ?></span>
              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
               
        <!-- /.col -->
      </div>
      <!-- /.row -->

    
      <!-- /.row -->
<br><br>
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->


  
          
          <!-- /.row -->


          <!-- /.box -->
        </div>
        <!-- /.col -->

    
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    <!-- /.content -->
  </div>